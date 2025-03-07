from fastapi import FastAPI, HTTPException, Request
import pymysql

app = FastAPI()

# Database connection settings
DB_HOST = "mariadb"
DB_USER = "root"
DB_PASSWORD = "password"
DB_NAME = "customersDB"

# Connect to the database
def get_db_connection():
    return pymysql.connect(host=DB_HOST, user=DB_USER, password=DB_PASSWORD, database=DB_NAME, cursorclass=pymysql.cursors.DictCursor)

# Create a new customer (JSON)
@app.post("/customers/")
async def create_customer(request: Request):
    data = await request.json()  # Get JSON data 


    conn = get_db_connection()
    with conn.cursor() as cursor:
        sql = "INSERT INTO customers (fname, lname, email, user, pw) VALUES (%s, %s, %s, %s, %s)"
        cursor.execute(sql, (data["fname"], data["lname"], data["email"], data["user"], data["pw"]))
        conn.commit()
        customer_id = cursor.lastrowid
    conn.close()
    
    return {"id": customer_id, **data}

# Get customer by ID (returns JSON)
@app.get("/customers/{customer_id}")
def get_customer(customer_id: int):
    conn = get_db_connection()
    with conn.cursor() as cursor:
        sql = "SELECT id, fname, lname, email, user FROM customers WHERE id = %s"
        cursor.execute(sql, (customer_id,))
        customer = cursor.fetchone()
    conn.close()

    if not customer:
        raise HTTPException(status_code=404, detail="Customer not found")

    return customer

if __name__ == "__main__":
    import os
    import socketserver
    import http.server

    # Run FastAPI using Python's built-in HTTP server
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000)
