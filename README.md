
``Login endpoints```
----
  Create Token 

* **URL**

  /v1/api/login

* **Method:** `POST`

* **Header:** `Accept:application/json`
  
* **Data Params**

    `email=admin@admin.com`
    `password=admin123`

* **Success Login Response:**

  * **Code:** 201 <br />
    
    **Content:** 
    ```javascript
    {
    "success": 1,
    "code": 201,
    "meta": {
        "method": "POST",
        "endpoint": "/api/1/login"
    },
    "data": {
        "name": "Dusty Bode V",
        "email": "ransom.hettinger@example.net",
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiY2ZkOGUyMjFkM2MxYTU4NTc2NDUwNDJlMDFhN2JhODA2NmFlYzQ2ZWMwZjZjOTUxYWExZjlmOTIxN2RjNmQxOGFkOWE2NjE4OTcxYzM4MDIiLCJpYXQiOjE2NjcwMzc0ODEuNTgxMDc3LCJuYmYiOjE2NjcwMzc0ODEuNTgxMDc4LCJleHAiOjE2OTg1NzM0ODEuNTc4MTg3LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Cyy8-IlJZ7NlW_jnc99JGV_Tx7-t6bexa28cWs34OTh6rhf7ks9o-fhPw5oCaV6i0L2Pey4uBy3FX6aOBpnfV6ENLw4KpXMDxyN-WWoKfU_M3XZ2HHZADl1DLMLOkjKJyEMw1IM056JJ_VQ9qi8UdS8Fqp_6tkT3djpqjD6SdvqtZ-fDk9EIW994hgghpWBeALBrv2y0vV7rReeqKppXlZSmja07jfwBwxCT6ZsUZ-S2jzlvX6mT0Rc_PTTaJeuHBakgj1v0gWvx-ZRjja8vyzNsADJCEFpkkEK5eoo_d1jlaATJKD86KyUoqr4wQRcybWAJkdYk9-crSIVkRDNTKYkJy2qMxxA6K97_XynC7aSZWZbHhH4dC1ZhprNUlt0f0LiqS0T3f1MtgLE7HLy-azo27FvwdW-fWlD6UWk2PpsJPOPjrmP1oP5YSVhax46YizfDKRQql8dv8pQ4jAXEFNEud57TMHoTSutiOALdx-PaIJ72MbrNgC5JZW277ellE8j3q-19cj4SI8U7MqbZPGhbVg2cgJx0XDiEQncLwbFPdrMnWH3qJeXuppkuzgC39JW-75vUUPqbyLPMneJx_EhIhgte_VPhFTUK1HTlJVg8SYqXl_TokX_sof22kpHHYrUPhE_mY9p370sPkBv2RibRWsUr8DyYUinFH_MD87Q"
    },
    "errors": {},
    "duration": 0.096
}
    ```
 
* **Error Response:**

  * **Code:** 400 VALIDATION ERROR <br />
    **Content:** 
    ```javascript
    {
        "success": 0,
        "code": 400,
        "meta": {
            "method": "POST",
            "endpoint": "/api/v1/login/"
        },
        "data": [],
        "error": [
            {
                "attribute": "email",
                "message": "The email field is required."
            },
            {
                "attribute": "password",
                "message": "The password field is required."
            }
        ]
    }
    ```

  * **Code:** 401 UNAUTHORIZED <br />
    **Content:** 
    ```javascript
        {
        "success": 0,
        "code": 401,
        "meta": {
            "method": "POST",
            "endpoint": "/api/1/login"
        },
        "data": [],
        "error": {
            "message": "Unauthorized."
        },
        "duration": 0.208
    }
    ```

    * **Code:** 400 Bad Request <br />

    **Content:** 
    ```javascript
       {
            "success": 0,
            "code": 400,
            "meta": {
                "method": "POST",
                "endpoint": "/api/1/login"
            },
            "data": [],
            "error": [
                {
                    "attribute": "email",
                    "messages": "The email field is required."
                },
                {
                    "attribute": "password",
                    "messages": "The password field is required."
                }
            ]
        }
    ```
