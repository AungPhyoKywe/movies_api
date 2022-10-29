
```Login endpoints```
----
  Create Token 

* **URL**

  /api/1/login

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

```Movies endpoints```
----

 Get Movies List

* **URL**

  /api/1/movies

* **Method:** `GET`

* **Header:** `Accept:application/json`

* **URL Parameter:** `limit=30` `offset=0`

* **Success Movies List Response:**

  * **Code:** 200 <br />
    
    **Content:** 
```javascript
            {
    "success": 1,
    "code": 200,
    "meta": {
        "method": "GET",
        "endpoint": "/api/1/movies/",
        "limit": 30,
        "offset": 0,
        "total": 30
    },
    "data": [
        {
            "id": 32,
            "title": "Mr.",
            "summary": "Consectetur iusto est aperiam voluptas qui unde qui cumque est sequi quibusdam recusandae minima quia in cumque animi provident ut.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Tierra Fahey",
            "tags": "tag-32",
            "imdb_rate": 32,
            "pdf_file": "http://www.gulgowski.com/dolorem-pariatur-id-vitae-dicta",
            "created_at": "29/09/2022 02:55:06",
            "updated_at": "27/01/1976 09:42:56",
            "comments": [
                {
                    "id": 32,
                    "movie_id": 32,
                    "email": "dbrakus@example.com",
                    "comment": "Ut quia eaque aliquid eum tenetur magni quia. Dolores est ut ratione. Aut ut autem aspernatur sit perspiciatis consectetur laborum.",
                    "created_at": "11/10/1972 09:59:25",
                    "updated_at": "17/04/2008 04:26:56"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 25,
            "title": "Prof.",
            "summary": "Qui quas sint in sed et quos odio nihil quod consequatur tenetur quod beatae et minima quaerat accusamus exercitationem eum fugiat vel dolore ut fugit dolor quia molestiae culpa.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Seth Lynch",
            "tags": "tag-25",
            "imdb_rate": 25,
            "pdf_file": "http://www.harber.com/voluptatum-corporis-minima-quasi-molestiae-voluptatem-ut-itaque-saepe",
            "created_at": "25/05/2021 23:18:13",
            "updated_at": "10/10/1990 18:23:25",
            "comments": [
                {
                    "id": 25,
                    "movie_id": 25,
                    "email": "dmills@example.org",
                    "comment": "Ut consequatur accusantium inventore sint perspiciatis voluptas. Accusamus rerum quam excepturi aspernatur nobis. Deserunt iure qui quo qui. Qui perferendis illum et et distinctio sit quia.",
                    "created_at": "24/01/1971 10:56:33",
                    "updated_at": "09/05/1976 12:44:39"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 23,
            "title": "Miss",
            "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Mr. Lula Konopelski DVM",
            "tags": "tag-23",
            "imdb_rate": 23,
            "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
            "created_at": "30/09/2019 20:31:22",
            "updated_at": "21/11/1989 06:14:42",
            "comments": [
                {
                    "id": 23,
                    "movie_id": 23,
                    "email": "qboyle@example.com",
                    "comment": "Adipisci ea et delectus quia voluptate voluptates impedit deserunt. Modi recusandae enim quis.",
                    "created_at": "19/08/1984 13:02:57",
                    "updated_at": "07/11/1973 05:28:15"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 38,
            "title": "Prof.",
            "summary": "Est laudantium aut similique quaerat id ipsa minima amet amet quia ratione consequatur vel necessitatibus modi dolorem est occaecati occaecati sapiente.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Odessa Greenholt V",
            "tags": "tag-38",
            "imdb_rate": 38,
            "pdf_file": "http://mayert.biz/",
            "created_at": "18/02/2017 04:26:38",
            "updated_at": "17/12/2018 07:53:19",
            "comments": [
                {
                    "id": 38,
                    "movie_id": 38,
                    "email": "cblock@example.com",
                    "comment": "Quam minus omnis voluptatem fugiat repudiandae. Ea reprehenderit sit et sunt nam illo dolor. Commodi debitis sint eum quos suscipit totam debitis. Architecto sed tenetur voluptatem ab magnam.",
                    "created_at": "17/09/1974 06:00:48",
                    "updated_at": "16/05/1990 09:18:40"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 31,
            "title": "Mrs.",
            "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Mr. Sidney Kertzmann Sr.",
            "tags": "tag-31",
            "imdb_rate": 31,
            "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
            "created_at": "09/02/2017 03:27:03",
            "updated_at": "09/07/2005 22:41:07",
            "comments": [
                {
                    "id": 31,
                    "movie_id": 31,
                    "email": "kuphal.kurt@example.org",
                    "comment": "Sunt optio molestiae rerum voluptas provident id. Sit similique iusto enim sapiente sit rerum ipsam.",
                    "created_at": "27/08/2004 11:45:05",
                    "updated_at": "01/07/1980 06:56:55"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 10,
            "title": "Dr.",
            "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Ms. Vesta Heathcote DDS",
            "tags": "tag-10",
            "imdb_rate": 10,
            "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
            "created_at": "08/01/2017 02:06:54",
            "updated_at": "20/09/1973 08:50:36",
            "comments": [
                {
                    "id": 10,
                    "movie_id": 10,
                    "email": "sporer.katelynn@example.org",
                    "comment": "Consequatur nam earum iure asperiores sed. Eum qui aut suscipit quos perspiciatis aut qui. Occaecati quam ut incidunt voluptas sit et.",
                    "created_at": "13/01/2010 06:59:40",
                    "updated_at": "09/12/1979 20:19:32"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 44,
            "title": "Dr.",
            "summary": "Quia rerum voluptatem dolore dolorum totam molestiae quia delectus mollitia provident atque eum libero autem ab unde incidunt optio ut reiciendis laborum consequuntur ut fugiat quis id labore aut officiis quo ab dolor sapiente facilis harum quia explicabo perferendis.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Lisette Jaskolski",
            "tags": "tag-44",
            "imdb_rate": 44,
            "pdf_file": "https://spencer.com/adipisci-facilis-ut-velit-optio-placeat-voluptatem-iusto.html",
            "created_at": "30/10/2015 17:35:57",
            "updated_at": "15/11/2004 21:45:20",
            "comments": [
                {
                    "id": 44,
                    "movie_id": 44,
                    "email": "cleora58@example.org",
                    "comment": "Rerum reprehenderit optio ut occaecati quia est. Nam sint autem labore perspiciatis rem. Et qui qui hic delectus.",
                    "created_at": "18/09/2010 14:25:04",
                    "updated_at": "12/03/1978 22:00:51"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 14,
            "title": "Prof.",
            "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Muriel Beer",
            "tags": "tag-14",
            "imdb_rate": 14,
            "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
            "created_at": "22/07/2015 12:49:38",
            "updated_at": "13/06/1980 11:05:29",
            "comments": [
                {
                    "id": 14,
                    "movie_id": 14,
                    "email": "uboyer@example.com",
                    "comment": "Cumque pariatur deleniti et neque ad. Id temporibus commodi recusandae in aut velit. Voluptatum ea facilis consequatur architecto.",
                    "created_at": "25/12/1990 13:50:51",
                    "updated_at": "17/02/1986 23:01:23"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 27,
            "title": "Mr.",
            "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Favian Schaefer",
            "tags": "tag-27",
            "imdb_rate": 27,
            "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
            "created_at": "18/02/2014 05:01:16",
            "updated_at": "05/07/1986 12:03:47",
            "comments": [
                {
                    "id": 27,
                    "movie_id": 27,
                    "email": "harber.jermaine@example.org",
                    "comment": "Voluptatibus inventore qui facilis consequatur. Distinctio incidunt commodi quas quibusdam. Veritatis saepe ratione earum ut. Odit nisi qui illo ut iste ex repellat.",
                    "created_at": "11/07/2012 11:35:48",
                    "updated_at": "08/10/2009 17:53:13"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 15,
            "title": "Dr.",
            "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
            "cover_image": "",
            "genres": "Horror",
            "author": "Chester McLaughlin",
            "tags": "tag-15",
            "imdb_rate": 15,
            "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
            "created_at": "14/10/2013 08:49:15",
            "updated_at": "09/09/1996 06:02:23",
            "comments": [
                {
                    "id": 15,
                    "movie_id": 15,
                    "email": "hermiston.liam@example.org",
                    "comment": "Ratione voluptatem dignissimos minima cum voluptas sint est consectetur. Rem eum unde aut eum autem. Voluptas unde necessitatibus repellat dicta et quam fugit.",
                    "created_at": "30/03/2010 17:56:40",
                    "updated_at": "29/06/1972 00:41:22"
                }
            ],
            "related_movies": [
                {
                    "id": 5,
                    "title": "Prof.",
                    "summary": "Quo quod suscipit culpa eos animi quae et natus fuga autem quas mollitia reiciendis maiores velit tempora nisi nihil sit ut laborum veritatis enim iure officia possimus nihil ut sed minus et fugiat vel.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Cheyenne Veum",
                    "tags": "tag-5",
                    "imdb_rate": 5,
                    "pdf_file": "http://www.gutmann.biz/nulla-et-soluta-laudantium-veritatis-pariatur-reiciendis.html",
                    "deleted_at": null,
                    "created_at": "1974-07-16 22:40:27",
                    "updated_at": "1975-07-12 19:27:58"
                },
                {
                    "id": 6,
                    "title": "Prof.",
                    "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Dr. Berniece Macejkovic",
                    "tags": "tag-6",
                    "imdb_rate": 6,
                    "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
                    "deleted_at": null,
                    "created_at": "2002-12-22 20:46:54",
                    "updated_at": "2008-01-21 23:12:48"
                },
                {
                    "id": 15,
                    "title": "Dr.",
                    "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Chester McLaughlin",
                    "tags": "tag-15",
                    "imdb_rate": 15,
                    "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
                    "deleted_at": null,
                    "created_at": "2013-10-14 08:49:15",
                    "updated_at": "1996-09-09 06:02:23"
                },
                {
                    "id": 16,
                    "title": "Mrs.",
                    "summary": "Minima amet distinctio voluptas ut assumenda odit vero et voluptatibus provident praesentium quaerat eos amet ullam molestiae porro animi molestiae vitae laboriosam quo officia reprehenderit accusantium recusandae dolore voluptatem minima ut sit sunt dicta nihil.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Waldo Bogisich",
                    "tags": "tag-16",
                    "imdb_rate": 16,
                    "pdf_file": "http://stark.com/distinctio-dolor-vitae-laborum-eum",
                    "deleted_at": null,
                    "created_at": "1984-01-21 02:36:09",
                    "updated_at": "1970-03-14 16:31:31"
                },
                {
                    "id": 21,
                    "title": "Dr.",
                    "summary": "Hic consequatur quae non ut autem vel necessitatibus sed quia totam a non qui voluptas doloremque est quasi dolorem sed dolor beatae incidunt.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Marvin Emard DVM",
                    "tags": "tag-21",
                    "imdb_rate": 21,
                    "pdf_file": "https://stroman.com/aliquam-natus-nulla-non-enim.html",
                    "deleted_at": null,
                    "created_at": "1992-03-05 06:45:53",
                    "updated_at": "2012-01-12 22:57:13"
                },
                {
                    "id": 24,
                    "title": "Mr.",
                    "summary": "Recusandae mollitia nihil soluta ducimus quas quos ut iusto saepe rerum doloremque et voluptatem corrupti quas porro doloribus quaerat eos sit atque numquam dolores quis distinctio non voluptas vel ab.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Travon Volkman Jr.",
                    "tags": "tag-24",
                    "imdb_rate": 24,
                    "pdf_file": "http://www.russel.com/harum-dicta-libero-officia.html",
                    "deleted_at": null,
                    "created_at": "1972-02-17 04:26:56",
                    "updated_at": "2008-07-18 01:03:38"
                },
                {
                    "id": 28,
                    "title": "Ms.",
                    "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Telly Halvorson",
                    "tags": "tag-28",
                    "imdb_rate": 28,
                    "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
                    "deleted_at": null,
                    "created_at": "2007-09-24 05:45:28",
                    "updated_at": "1979-09-03 23:13:45"
                }
            ]
        },
        {
            "id": 11,
            "title": "Ms.",
            "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Dr. Deontae Kemmer Jr.",
            "tags": "tag-11",
            "imdb_rate": 11,
            "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
            "created_at": "07/10/2013 13:50:58",
            "updated_at": "11/12/2020 13:09:34",
            "comments": [
                {
                    "id": 11,
                    "movie_id": 11,
                    "email": "ramon.mante@example.org",
                    "comment": "Nihil maiores non veritatis perspiciatis. Odio blanditiis dolores eum aut. Repudiandae aut perspiciatis nostrum suscipit harum veniam et.",
                    "created_at": "30/01/2013 07:47:21",
                    "updated_at": "26/06/1992 20:46:13"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 18,
            "title": "Mr.",
            "summary": "Consectetur iste qui voluptatem enim sed natus repellendus a quis aut voluptates labore qui similique tempora aut ut vitae architecto at omnis architecto unde voluptatibus magni velit magnam.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Eric Larkin III",
            "tags": "tag-18",
            "imdb_rate": 18,
            "pdf_file": "http://www.goodwin.info/quidem-dolorem-doloribus-quae.html",
            "created_at": "07/05/2013 23:40:25",
            "updated_at": "20/04/1997 21:01:01",
            "comments": [
                {
                    "id": 18,
                    "movie_id": 18,
                    "email": "vterry@example.net",
                    "comment": "Odit molestias et aut eum sint. Tempora voluptate non vero. Tempore natus ad veniam facilis natus occaecati illum.",
                    "created_at": "28/05/2012 06:37:50",
                    "updated_at": "12/07/1980 03:41:37"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 7,
            "title": "Prof.",
            "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Burdette Wuckert",
            "tags": "tag-7",
            "imdb_rate": 7,
            "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
            "created_at": "12/06/2012 14:10:53",
            "updated_at": "20/02/2012 17:27:46",
            "comments": [
                {
                    "id": 7,
                    "movie_id": 7,
                    "email": "romaine12@example.org",
                    "comment": "Vero deserunt rerum quia ut laboriosam et dolorem. Laboriosam quam dolores veniam. Omnis est velit sed voluptatum veniam quisquam recusandae. Quam fugiat id sint quasi.",
                    "created_at": "12/06/1990 15:16:03",
                    "updated_at": "26/10/2017 11:06:59"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 13,
            "title": "Mrs.",
            "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Agustina Fisher",
            "tags": "tag-13",
            "imdb_rate": 13,
            "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
            "created_at": "11/01/2012 06:03:14",
            "updated_at": "27/09/1982 19:47:10",
            "comments": [
                {
                    "id": 13,
                    "movie_id": 13,
                    "email": "kilback.milton@example.org",
                    "comment": "Nihil et aliquid illo vitae. Sed ea eum omnis nulla. Rem illo quo qui molestias. Ea itaque est cumque laborum. Omnis laborum nihil et praesentium qui porro.",
                    "created_at": "18/11/2001 18:54:55",
                    "updated_at": "09/07/2021 21:43:46"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 41,
            "title": "Miss",
            "summary": "Ut rem ex aut laboriosam sint asperiores omnis aut rerum odio aperiam facere nesciunt aut quo sit deserunt quasi eius voluptate quod voluptatem ut cupiditate nesciunt maiores iusto quo qui veniam voluptas.",
            "cover_image": "",
            "genres": "Horror",
            "author": "Mrs. Haylie Skiles",
            "tags": "tag-41",
            "imdb_rate": 41,
            "pdf_file": "http://adams.com/ipsam-placeat-fuga-quia-dolor.html",
            "created_at": "07/12/2010 23:42:35",
            "updated_at": "30/07/2017 18:50:26",
            "comments": [
                {
                    "id": 41,
                    "movie_id": 41,
                    "email": "era28@example.com",
                    "comment": "Facere sit vitae neque sunt voluptatem. Voluptatum et qui quo vel molestiae. Quis commodi suscipit quia et.",
                    "created_at": "17/02/2016 17:34:34",
                    "updated_at": "05/08/1971 07:26:50"
                }
            ],
            "related_movies": [
                {
                    "id": 5,
                    "title": "Prof.",
                    "summary": "Quo quod suscipit culpa eos animi quae et natus fuga autem quas mollitia reiciendis maiores velit tempora nisi nihil sit ut laborum veritatis enim iure officia possimus nihil ut sed minus et fugiat vel.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Cheyenne Veum",
                    "tags": "tag-5",
                    "imdb_rate": 5,
                    "pdf_file": "http://www.gutmann.biz/nulla-et-soluta-laudantium-veritatis-pariatur-reiciendis.html",
                    "deleted_at": null,
                    "created_at": "1974-07-16 22:40:27",
                    "updated_at": "1975-07-12 19:27:58"
                },
                {
                    "id": 6,
                    "title": "Prof.",
                    "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Dr. Berniece Macejkovic",
                    "tags": "tag-6",
                    "imdb_rate": 6,
                    "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
                    "deleted_at": null,
                    "created_at": "2002-12-22 20:46:54",
                    "updated_at": "2008-01-21 23:12:48"
                },
                {
                    "id": 15,
                    "title": "Dr.",
                    "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Chester McLaughlin",
                    "tags": "tag-15",
                    "imdb_rate": 15,
                    "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
                    "deleted_at": null,
                    "created_at": "2013-10-14 08:49:15",
                    "updated_at": "1996-09-09 06:02:23"
                },
                {
                    "id": 16,
                    "title": "Mrs.",
                    "summary": "Minima amet distinctio voluptas ut assumenda odit vero et voluptatibus provident praesentium quaerat eos amet ullam molestiae porro animi molestiae vitae laboriosam quo officia reprehenderit accusantium recusandae dolore voluptatem minima ut sit sunt dicta nihil.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Waldo Bogisich",
                    "tags": "tag-16",
                    "imdb_rate": 16,
                    "pdf_file": "http://stark.com/distinctio-dolor-vitae-laborum-eum",
                    "deleted_at": null,
                    "created_at": "1984-01-21 02:36:09",
                    "updated_at": "1970-03-14 16:31:31"
                },
                {
                    "id": 21,
                    "title": "Dr.",
                    "summary": "Hic consequatur quae non ut autem vel necessitatibus sed quia totam a non qui voluptas doloremque est quasi dolorem sed dolor beatae incidunt.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Marvin Emard DVM",
                    "tags": "tag-21",
                    "imdb_rate": 21,
                    "pdf_file": "https://stroman.com/aliquam-natus-nulla-non-enim.html",
                    "deleted_at": null,
                    "created_at": "1992-03-05 06:45:53",
                    "updated_at": "2012-01-12 22:57:13"
                },
                {
                    "id": 24,
                    "title": "Mr.",
                    "summary": "Recusandae mollitia nihil soluta ducimus quas quos ut iusto saepe rerum doloremque et voluptatem corrupti quas porro doloribus quaerat eos sit atque numquam dolores quis distinctio non voluptas vel ab.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Travon Volkman Jr.",
                    "tags": "tag-24",
                    "imdb_rate": 24,
                    "pdf_file": "http://www.russel.com/harum-dicta-libero-officia.html",
                    "deleted_at": null,
                    "created_at": "1972-02-17 04:26:56",
                    "updated_at": "2008-07-18 01:03:38"
                },
                {
                    "id": 28,
                    "title": "Ms.",
                    "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Telly Halvorson",
                    "tags": "tag-28",
                    "imdb_rate": 28,
                    "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
                    "deleted_at": null,
                    "created_at": "2007-09-24 05:45:28",
                    "updated_at": "1979-09-03 23:13:45"
                }
            ]
        },
        {
            "id": 28,
            "title": "Ms.",
            "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
            "cover_image": "",
            "genres": "Horror",
            "author": "Telly Halvorson",
            "tags": "tag-28",
            "imdb_rate": 28,
            "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
            "created_at": "24/09/2007 05:45:28",
            "updated_at": "03/09/1979 23:13:45",
            "comments": [
                {
                    "id": 28,
                    "movie_id": 28,
                    "email": "fcole@example.com",
                    "comment": "Non vel eum amet aut nesciunt. Sed repudiandae qui soluta molestias nulla. Tenetur aut magni dicta odio et nam. Impedit similique impedit deserunt molestias ex et praesentium. Vero hic est at quam.",
                    "created_at": "26/11/2001 09:54:52",
                    "updated_at": "24/08/1982 15:14:12"
                }
            ],
            "related_movies": [
                {
                    "id": 5,
                    "title": "Prof.",
                    "summary": "Quo quod suscipit culpa eos animi quae et natus fuga autem quas mollitia reiciendis maiores velit tempora nisi nihil sit ut laborum veritatis enim iure officia possimus nihil ut sed minus et fugiat vel.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Cheyenne Veum",
                    "tags": "tag-5",
                    "imdb_rate": 5,
                    "pdf_file": "http://www.gutmann.biz/nulla-et-soluta-laudantium-veritatis-pariatur-reiciendis.html",
                    "deleted_at": null,
                    "created_at": "1974-07-16 22:40:27",
                    "updated_at": "1975-07-12 19:27:58"
                },
                {
                    "id": 6,
                    "title": "Prof.",
                    "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Dr. Berniece Macejkovic",
                    "tags": "tag-6",
                    "imdb_rate": 6,
                    "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
                    "deleted_at": null,
                    "created_at": "2002-12-22 20:46:54",
                    "updated_at": "2008-01-21 23:12:48"
                },
                {
                    "id": 15,
                    "title": "Dr.",
                    "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Chester McLaughlin",
                    "tags": "tag-15",
                    "imdb_rate": 15,
                    "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
                    "deleted_at": null,
                    "created_at": "2013-10-14 08:49:15",
                    "updated_at": "1996-09-09 06:02:23"
                },
                {
                    "id": 16,
                    "title": "Mrs.",
                    "summary": "Minima amet distinctio voluptas ut assumenda odit vero et voluptatibus provident praesentium quaerat eos amet ullam molestiae porro animi molestiae vitae laboriosam quo officia reprehenderit accusantium recusandae dolore voluptatem minima ut sit sunt dicta nihil.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Waldo Bogisich",
                    "tags": "tag-16",
                    "imdb_rate": 16,
                    "pdf_file": "http://stark.com/distinctio-dolor-vitae-laborum-eum",
                    "deleted_at": null,
                    "created_at": "1984-01-21 02:36:09",
                    "updated_at": "1970-03-14 16:31:31"
                },
                {
                    "id": 21,
                    "title": "Dr.",
                    "summary": "Hic consequatur quae non ut autem vel necessitatibus sed quia totam a non qui voluptas doloremque est quasi dolorem sed dolor beatae incidunt.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Marvin Emard DVM",
                    "tags": "tag-21",
                    "imdb_rate": 21,
                    "pdf_file": "https://stroman.com/aliquam-natus-nulla-non-enim.html",
                    "deleted_at": null,
                    "created_at": "1992-03-05 06:45:53",
                    "updated_at": "2012-01-12 22:57:13"
                },
                {
                    "id": 24,
                    "title": "Mr.",
                    "summary": "Recusandae mollitia nihil soluta ducimus quas quos ut iusto saepe rerum doloremque et voluptatem corrupti quas porro doloribus quaerat eos sit atque numquam dolores quis distinctio non voluptas vel ab.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Travon Volkman Jr.",
                    "tags": "tag-24",
                    "imdb_rate": 24,
                    "pdf_file": "http://www.russel.com/harum-dicta-libero-officia.html",
                    "deleted_at": null,
                    "created_at": "1972-02-17 04:26:56",
                    "updated_at": "2008-07-18 01:03:38"
                },
                {
                    "id": 28,
                    "title": "Ms.",
                    "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Telly Halvorson",
                    "tags": "tag-28",
                    "imdb_rate": 28,
                    "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
                    "deleted_at": null,
                    "created_at": "2007-09-24 05:45:28",
                    "updated_at": "1979-09-03 23:13:45"
                }
            ]
        },
        {
            "id": 46,
            "title": "Dr.",
            "summary": "Nisi pariatur amet fuga sint animi sint expedita reiciendis non delectus dolore minus minus omnis non soluta voluptates amet iste fuga quo et quia autem ipsam quia.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Reanna Swift",
            "tags": "tag-46",
            "imdb_rate": 46,
            "pdf_file": "https://batz.com/et-reprehenderit-molestiae-illum-quae-nemo.html",
            "created_at": "23/09/2007 16:02:54",
            "updated_at": "26/10/1991 02:42:10",
            "comments": [
                {
                    "id": 46,
                    "movie_id": 46,
                    "email": "misty19@example.com",
                    "comment": "Ab quidem cumque molestiae aperiam. Voluptatem nobis voluptatem cupiditate velit est accusantium. Neque officiis dolor qui ullam. Rerum voluptatem rerum velit ea.",
                    "created_at": "15/01/2020 15:24:31",
                    "updated_at": "06/04/2011 15:53:05"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 36,
            "title": "Mrs.",
            "summary": "Ratione et aut qui eveniet itaque sunt id aut magni fugit reprehenderit dolorum omnis ea sunt est doloribus sequi ipsam possimus consequatur accusamus vero nihil sit fugiat omnis ut asperiores ut molestias accusantium qui.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Dr. Ara Weimann DVM",
            "tags": "tag-36",
            "imdb_rate": 36,
            "pdf_file": "http://armstrong.com/",
            "created_at": "03/01/2005 06:38:25",
            "updated_at": "27/09/1989 18:11:30",
            "comments": [
                {
                    "id": 36,
                    "movie_id": 36,
                    "email": "emelie.rowe@example.com",
                    "comment": "Voluptas corrupti ea facere repellendus nobis reprehenderit non. Voluptate et aut dolores eos. Et vel qui et laborum.",
                    "created_at": "19/10/1981 13:46:42",
                    "updated_at": "10/11/2018 11:58:14"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 9,
            "title": "Dr.",
            "summary": "Cumque ratione quo eum ullam autem itaque aut voluptas consectetur aspernatur architecto perspiciatis sunt voluptatem officiis molestiae qui culpa molestias repellat ex voluptas voluptatibus sunt alias voluptas velit voluptatum officia consequatur corporis est numquam quis maiores voluptatem.",
            "cover_image": "",
            "genres": "Fighting",
            "author": "Miss Hanna Anderson DDS",
            "tags": "tag-9",
            "imdb_rate": 9,
            "pdf_file": "http://www.macejkovic.com/voluptatum-consequuntur-atque-enim",
            "created_at": "23/09/2004 20:10:54",
            "updated_at": "18/09/2019 18:44:46",
            "comments": [
                {
                    "id": 9,
                    "movie_id": 9,
                    "email": "kuvalis.jessika@example.org",
                    "comment": "Accusantium odit quis architecto quidem quae corrupti. Sequi rerum neque est deserunt qui provident velit vitae. Harum ut eum adipisci id aspernatur cumque sint. Est dignissimos non debitis dolorem.",
                    "created_at": "31/10/1977 21:32:32",
                    "updated_at": "26/05/2008 01:32:48"
                }
            ],
            "related_movies": [
                {
                    "id": 1,
                    "title": "Dr.",
                    "summary": "Atque autem facere minus quod qui assumenda ut aliquid error reiciendis officia eius illo vel nihil nobis vitae aperiam voluptas doloribus dolor magni nulla.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Murphy Stamm PhD",
                    "tags": "tag-1",
                    "imdb_rate": 1,
                    "pdf_file": "http://www.tremblay.com/harum-ab-eos-sit-culpa-officiis-quia.html",
                    "deleted_at": null,
                    "created_at": "2000-11-08 16:11:43",
                    "updated_at": "2014-12-18 17:09:15"
                },
                {
                    "id": 3,
                    "title": "DDDDD",
                    "summary": "Optio aliquam quas est veniam quis veritatis ratione modi doloremque vero unde impedit quidem quaerat ut explicabo ullam quos sunt et omnis nulla rerum eos et dolorem voluptatem recusandae quia reprehenderit repellendus.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Seamus Hagenes",
                    "tags": "tag-3",
                    "imdb_rate": 3,
                    "pdf_file": "http://prosacco.com/ut-non-expedita-qui-fugit-ea-quis-ipsum",
                    "deleted_at": "2022-10-29 10:05:21",
                    "created_at": "1983-12-14 03:46:38",
                    "updated_at": "2022-10-29 10:05:21"
                },
                {
                    "id": 9,
                    "title": "Dr.",
                    "summary": "Cumque ratione quo eum ullam autem itaque aut voluptas consectetur aspernatur architecto perspiciatis sunt voluptatem officiis molestiae qui culpa molestias repellat ex voluptas voluptatibus sunt alias voluptas velit voluptatum officia consequatur corporis est numquam quis maiores voluptatem.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Miss Hanna Anderson DDS",
                    "tags": "tag-9",
                    "imdb_rate": 9,
                    "pdf_file": "http://www.macejkovic.com/voluptatum-consequuntur-atque-enim",
                    "deleted_at": null,
                    "created_at": "2004-09-23 20:10:54",
                    "updated_at": "2019-09-18 18:44:46"
                },
                {
                    "id": 19,
                    "title": "Prof.",
                    "summary": "Praesentium soluta sit exercitationem corrupti ducimus perferendis rerum vero et rerum assumenda reprehenderit animi quod a voluptates fugiat natus ut impedit fugiat molestiae temporibus fugit voluptatem sit explicabo expedita qui velit ea placeat modi et sed voluptates et et veritatis.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Haleigh Wilderman",
                    "tags": "tag-19",
                    "imdb_rate": 19,
                    "pdf_file": "http://ohara.com/provident-praesentium-quo-vel-sed-recusandae-impedit.html",
                    "deleted_at": null,
                    "created_at": "1981-10-04 20:14:20",
                    "updated_at": "1982-02-27 09:51:50"
                },
                {
                    "id": 22,
                    "title": "Mr.",
                    "summary": "Dolorum a numquam rerum est voluptas reprehenderit voluptatum quia est dolorum molestias ut consequatur eum quos voluptate ut quia.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Carlo Wiegand DVM",
                    "tags": "tag-22",
                    "imdb_rate": 22,
                    "pdf_file": "http://www.bergstrom.net/quia-eius-doloribus-veniam-provident-veritatis-impedit-voluptatum.html",
                    "deleted_at": null,
                    "created_at": "1977-06-25 06:42:10",
                    "updated_at": "2009-07-09 09:22:32"
                },
                {
                    "id": 42,
                    "title": "Dr.",
                    "summary": "Voluptatem enim nostrum voluptatem explicabo praesentium rerum ab sapiente eos aut est facilis non necessitatibus ducimus neque distinctio ut vel commodi.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Nicolas Johnston III",
                    "tags": "tag-42",
                    "imdb_rate": 42,
                    "pdf_file": "https://will.biz/vel-expedita-aut-ipsa-blanditiis-voluptas-et-enim.html",
                    "deleted_at": null,
                    "created_at": "1975-05-17 03:36:16",
                    "updated_at": "2014-03-21 19:54:35"
                },
                {
                    "id": 45,
                    "title": "Prof.",
                    "summary": "Pariatur dolor beatae deleniti ut non ut atque dolores et nulla enim deserunt amet molestiae aut voluptates dolore harum pariatur quis est ex dicta omnis eveniet ad accusantium.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Lacy Barrows",
                    "tags": "tag-45",
                    "imdb_rate": 45,
                    "pdf_file": "http://davis.com/officia-et-voluptate-odio-consequuntur-vero-cupiditate.html",
                    "deleted_at": null,
                    "created_at": "2002-01-28 11:01:20",
                    "updated_at": "2012-06-02 16:10:03"
                }
            ]
        },
        {
            "id": 20,
            "title": "Mrs.",
            "summary": "Id amet dicta blanditiis vel vel dolor praesentium architecto maiores debitis et qui velit aspernatur et optio labore in unde repudiandae molestias magnam fugiat laboriosam autem repudiandae quia est cum ipsa dicta.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Jermaine Okuneva",
            "tags": "tag-20",
            "imdb_rate": 20,
            "pdf_file": "http://spencer.com/",
            "created_at": "28/06/2003 13:28:06",
            "updated_at": "27/04/1990 22:16:01",
            "comments": [
                {
                    "id": 20,
                    "movie_id": 20,
                    "email": "anderson.collier@example.org",
                    "comment": "Officia voluptate iure repellat dolorem consectetur exercitationem. Maiores aut harum ratione qui et libero reprehenderit. Dolores rerum velit laudantium tempora.",
                    "created_at": "27/01/1992 22:02:42",
                    "updated_at": "11/07/2021 05:14:20"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 48,
            "title": "Miss",
            "summary": "Sequi voluptatibus eum quis molestiae ut nobis minima aliquid accusamus qui aut aut aut consequatur id officiis aliquid dolorum adipisci ullam consequuntur ipsam neque ad aut animi omnis repellat sit rerum eum dolor possimus illo deserunt qui sed magni dolore est fugiat.",
            "cover_image": "",
            "genres": "Fighting",
            "author": "Mrs. Betty Murazik Jr.",
            "tags": "tag-48",
            "imdb_rate": 48,
            "pdf_file": "http://www.brekke.com/laboriosam-velit-debitis-corrupti-aut-voluptatibus-nam.html",
            "created_at": "19/02/2003 23:16:47",
            "updated_at": "06/06/1996 09:19:14",
            "comments": [],
            "related_movies": [
                {
                    "id": 1,
                    "title": "Dr.",
                    "summary": "Atque autem facere minus quod qui assumenda ut aliquid error reiciendis officia eius illo vel nihil nobis vitae aperiam voluptas doloribus dolor magni nulla.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Murphy Stamm PhD",
                    "tags": "tag-1",
                    "imdb_rate": 1,
                    "pdf_file": "http://www.tremblay.com/harum-ab-eos-sit-culpa-officiis-quia.html",
                    "deleted_at": null,
                    "created_at": "2000-11-08 16:11:43",
                    "updated_at": "2014-12-18 17:09:15"
                },
                {
                    "id": 3,
                    "title": "DDDDD",
                    "summary": "Optio aliquam quas est veniam quis veritatis ratione modi doloremque vero unde impedit quidem quaerat ut explicabo ullam quos sunt et omnis nulla rerum eos et dolorem voluptatem recusandae quia reprehenderit repellendus.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Seamus Hagenes",
                    "tags": "tag-3",
                    "imdb_rate": 3,
                    "pdf_file": "http://prosacco.com/ut-non-expedita-qui-fugit-ea-quis-ipsum",
                    "deleted_at": "2022-10-29 10:05:21",
                    "created_at": "1983-12-14 03:46:38",
                    "updated_at": "2022-10-29 10:05:21"
                },
                {
                    "id": 9,
                    "title": "Dr.",
                    "summary": "Cumque ratione quo eum ullam autem itaque aut voluptas consectetur aspernatur architecto perspiciatis sunt voluptatem officiis molestiae qui culpa molestias repellat ex voluptas voluptatibus sunt alias voluptas velit voluptatum officia consequatur corporis est numquam quis maiores voluptatem.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Miss Hanna Anderson DDS",
                    "tags": "tag-9",
                    "imdb_rate": 9,
                    "pdf_file": "http://www.macejkovic.com/voluptatum-consequuntur-atque-enim",
                    "deleted_at": null,
                    "created_at": "2004-09-23 20:10:54",
                    "updated_at": "2019-09-18 18:44:46"
                },
                {
                    "id": 19,
                    "title": "Prof.",
                    "summary": "Praesentium soluta sit exercitationem corrupti ducimus perferendis rerum vero et rerum assumenda reprehenderit animi quod a voluptates fugiat natus ut impedit fugiat molestiae temporibus fugit voluptatem sit explicabo expedita qui velit ea placeat modi et sed voluptates et et veritatis.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Haleigh Wilderman",
                    "tags": "tag-19",
                    "imdb_rate": 19,
                    "pdf_file": "http://ohara.com/provident-praesentium-quo-vel-sed-recusandae-impedit.html",
                    "deleted_at": null,
                    "created_at": "1981-10-04 20:14:20",
                    "updated_at": "1982-02-27 09:51:50"
                },
                {
                    "id": 22,
                    "title": "Mr.",
                    "summary": "Dolorum a numquam rerum est voluptas reprehenderit voluptatum quia est dolorum molestias ut consequatur eum quos voluptate ut quia.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Carlo Wiegand DVM",
                    "tags": "tag-22",
                    "imdb_rate": 22,
                    "pdf_file": "http://www.bergstrom.net/quia-eius-doloribus-veniam-provident-veritatis-impedit-voluptatum.html",
                    "deleted_at": null,
                    "created_at": "1977-06-25 06:42:10",
                    "updated_at": "2009-07-09 09:22:32"
                },
                {
                    "id": 42,
                    "title": "Dr.",
                    "summary": "Voluptatem enim nostrum voluptatem explicabo praesentium rerum ab sapiente eos aut est facilis non necessitatibus ducimus neque distinctio ut vel commodi.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Nicolas Johnston III",
                    "tags": "tag-42",
                    "imdb_rate": 42,
                    "pdf_file": "https://will.biz/vel-expedita-aut-ipsa-blanditiis-voluptas-et-enim.html",
                    "deleted_at": null,
                    "created_at": "1975-05-17 03:36:16",
                    "updated_at": "2014-03-21 19:54:35"
                },
                {
                    "id": 45,
                    "title": "Prof.",
                    "summary": "Pariatur dolor beatae deleniti ut non ut atque dolores et nulla enim deserunt amet molestiae aut voluptates dolore harum pariatur quis est ex dicta omnis eveniet ad accusantium.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Lacy Barrows",
                    "tags": "tag-45",
                    "imdb_rate": 45,
                    "pdf_file": "http://davis.com/officia-et-voluptate-odio-consequuntur-vero-cupiditate.html",
                    "deleted_at": null,
                    "created_at": "2002-01-28 11:01:20",
                    "updated_at": "2012-06-02 16:10:03"
                }
            ]
        },
        {
            "id": 34,
            "title": "Prof.",
            "summary": "Quaerat itaque veritatis consequatur nesciunt aut dolor dicta est qui non veritatis vitae porro quos consequatur nulla quia voluptatem sint quam vel quos possimus aut consequatur sed praesentium molestias.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Forrest Kub",
            "tags": "tag-34",
            "imdb_rate": 34,
            "pdf_file": "http://koepp.com/",
            "created_at": "27/01/2003 11:17:58",
            "updated_at": "15/07/1981 12:32:20",
            "comments": [
                {
                    "id": 34,
                    "movie_id": 34,
                    "email": "doyle04@example.org",
                    "comment": "Id voluptatem ad numquam eveniet est deserunt recusandae. Qui non sequi natus a consequatur recusandae amet ipsum. Sequi harum quia rerum aut dignissimos omnis.",
                    "created_at": "27/04/1989 18:10:33",
                    "updated_at": "24/11/1984 17:32:43"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 6,
            "title": "Prof.",
            "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
            "cover_image": "",
            "genres": "Horror",
            "author": "Dr. Berniece Macejkovic",
            "tags": "tag-6",
            "imdb_rate": 6,
            "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
            "created_at": "22/12/2002 20:46:54",
            "updated_at": "21/01/2008 23:12:48",
            "comments": [
                {
                    "id": 6,
                    "movie_id": 6,
                    "email": "osmith@example.com",
                    "comment": "Possimus fugiat numquam cum voluptas. Rem esse in vitae ea aut alias. In atque quod ad consequuntur dolor ea eos.",
                    "created_at": "03/10/1983 20:48:26",
                    "updated_at": "23/08/2011 01:57:04"
                }
            ],
            "related_movies": [
                {
                    "id": 5,
                    "title": "Prof.",
                    "summary": "Quo quod suscipit culpa eos animi quae et natus fuga autem quas mollitia reiciendis maiores velit tempora nisi nihil sit ut laborum veritatis enim iure officia possimus nihil ut sed minus et fugiat vel.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Cheyenne Veum",
                    "tags": "tag-5",
                    "imdb_rate": 5,
                    "pdf_file": "http://www.gutmann.biz/nulla-et-soluta-laudantium-veritatis-pariatur-reiciendis.html",
                    "deleted_at": null,
                    "created_at": "1974-07-16 22:40:27",
                    "updated_at": "1975-07-12 19:27:58"
                },
                {
                    "id": 6,
                    "title": "Prof.",
                    "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Dr. Berniece Macejkovic",
                    "tags": "tag-6",
                    "imdb_rate": 6,
                    "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
                    "deleted_at": null,
                    "created_at": "2002-12-22 20:46:54",
                    "updated_at": "2008-01-21 23:12:48"
                },
                {
                    "id": 15,
                    "title": "Dr.",
                    "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Chester McLaughlin",
                    "tags": "tag-15",
                    "imdb_rate": 15,
                    "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
                    "deleted_at": null,
                    "created_at": "2013-10-14 08:49:15",
                    "updated_at": "1996-09-09 06:02:23"
                },
                {
                    "id": 16,
                    "title": "Mrs.",
                    "summary": "Minima amet distinctio voluptas ut assumenda odit vero et voluptatibus provident praesentium quaerat eos amet ullam molestiae porro animi molestiae vitae laboriosam quo officia reprehenderit accusantium recusandae dolore voluptatem minima ut sit sunt dicta nihil.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Waldo Bogisich",
                    "tags": "tag-16",
                    "imdb_rate": 16,
                    "pdf_file": "http://stark.com/distinctio-dolor-vitae-laborum-eum",
                    "deleted_at": null,
                    "created_at": "1984-01-21 02:36:09",
                    "updated_at": "1970-03-14 16:31:31"
                },
                {
                    "id": 21,
                    "title": "Dr.",
                    "summary": "Hic consequatur quae non ut autem vel necessitatibus sed quia totam a non qui voluptas doloremque est quasi dolorem sed dolor beatae incidunt.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Marvin Emard DVM",
                    "tags": "tag-21",
                    "imdb_rate": 21,
                    "pdf_file": "https://stroman.com/aliquam-natus-nulla-non-enim.html",
                    "deleted_at": null,
                    "created_at": "1992-03-05 06:45:53",
                    "updated_at": "2012-01-12 22:57:13"
                },
                {
                    "id": 24,
                    "title": "Mr.",
                    "summary": "Recusandae mollitia nihil soluta ducimus quas quos ut iusto saepe rerum doloremque et voluptatem corrupti quas porro doloribus quaerat eos sit atque numquam dolores quis distinctio non voluptas vel ab.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Travon Volkman Jr.",
                    "tags": "tag-24",
                    "imdb_rate": 24,
                    "pdf_file": "http://www.russel.com/harum-dicta-libero-officia.html",
                    "deleted_at": null,
                    "created_at": "1972-02-17 04:26:56",
                    "updated_at": "2008-07-18 01:03:38"
                },
                {
                    "id": 28,
                    "title": "Ms.",
                    "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Telly Halvorson",
                    "tags": "tag-28",
                    "imdb_rate": 28,
                    "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
                    "deleted_at": null,
                    "created_at": "2007-09-24 05:45:28",
                    "updated_at": "1979-09-03 23:13:45"
                }
            ]
        },
        {
            "id": 8,
            "title": "Miss",
            "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Dr. Peggie Schulist",
            "tags": "tag-8",
            "imdb_rate": 8,
            "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
            "created_at": "17/06/2002 20:23:32",
            "updated_at": "01/09/1990 19:23:40",
            "comments": [
                {
                    "id": 8,
                    "movie_id": 8,
                    "email": "jaquelin.moen@example.org",
                    "comment": "Facilis hic et recusandae dignissimos consequatur quae enim. Tenetur impedit repudiandae odio sit et corrupti est. Aut quia nobis est animi eligendi labore.",
                    "created_at": "13/05/2011 03:11:41",
                    "updated_at": "16/04/2008 21:15:53"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        },
        {
            "id": 45,
            "title": "Prof.",
            "summary": "Pariatur dolor beatae deleniti ut non ut atque dolores et nulla enim deserunt amet molestiae aut voluptates dolore harum pariatur quis est ex dicta omnis eveniet ad accusantium.",
            "cover_image": "",
            "genres": "Fighting",
            "author": "Lacy Barrows",
            "tags": "tag-45",
            "imdb_rate": 45,
            "pdf_file": "http://davis.com/officia-et-voluptate-odio-consequuntur-vero-cupiditate.html",
            "created_at": "28/01/2002 11:01:20",
            "updated_at": "02/06/2012 16:10:03",
            "comments": [
                {
                    "id": 45,
                    "movie_id": 45,
                    "email": "shayna.ohara@example.org",
                    "comment": "Necessitatibus deserunt excepturi ad cupiditate aut. Illum atque alias dolorum odit. Asperiores debitis ea dolorem sequi et laborum quis ut.",
                    "created_at": "07/09/1992 17:42:02",
                    "updated_at": "19/12/2019 08:18:47"
                }
            ],
            "related_movies": [
                {
                    "id": 1,
                    "title": "Dr.",
                    "summary": "Atque autem facere minus quod qui assumenda ut aliquid error reiciendis officia eius illo vel nihil nobis vitae aperiam voluptas doloribus dolor magni nulla.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Murphy Stamm PhD",
                    "tags": "tag-1",
                    "imdb_rate": 1,
                    "pdf_file": "http://www.tremblay.com/harum-ab-eos-sit-culpa-officiis-quia.html",
                    "deleted_at": null,
                    "created_at": "2000-11-08 16:11:43",
                    "updated_at": "2014-12-18 17:09:15"
                },
                {
                    "id": 3,
                    "title": "DDDDD",
                    "summary": "Optio aliquam quas est veniam quis veritatis ratione modi doloremque vero unde impedit quidem quaerat ut explicabo ullam quos sunt et omnis nulla rerum eos et dolorem voluptatem recusandae quia reprehenderit repellendus.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Seamus Hagenes",
                    "tags": "tag-3",
                    "imdb_rate": 3,
                    "pdf_file": "http://prosacco.com/ut-non-expedita-qui-fugit-ea-quis-ipsum",
                    "deleted_at": "2022-10-29 10:05:21",
                    "created_at": "1983-12-14 03:46:38",
                    "updated_at": "2022-10-29 10:05:21"
                },
                {
                    "id": 9,
                    "title": "Dr.",
                    "summary": "Cumque ratione quo eum ullam autem itaque aut voluptas consectetur aspernatur architecto perspiciatis sunt voluptatem officiis molestiae qui culpa molestias repellat ex voluptas voluptatibus sunt alias voluptas velit voluptatum officia consequatur corporis est numquam quis maiores voluptatem.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Miss Hanna Anderson DDS",
                    "tags": "tag-9",
                    "imdb_rate": 9,
                    "pdf_file": "http://www.macejkovic.com/voluptatum-consequuntur-atque-enim",
                    "deleted_at": null,
                    "created_at": "2004-09-23 20:10:54",
                    "updated_at": "2019-09-18 18:44:46"
                },
                {
                    "id": 19,
                    "title": "Prof.",
                    "summary": "Praesentium soluta sit exercitationem corrupti ducimus perferendis rerum vero et rerum assumenda reprehenderit animi quod a voluptates fugiat natus ut impedit fugiat molestiae temporibus fugit voluptatem sit explicabo expedita qui velit ea placeat modi et sed voluptates et et veritatis.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Haleigh Wilderman",
                    "tags": "tag-19",
                    "imdb_rate": 19,
                    "pdf_file": "http://ohara.com/provident-praesentium-quo-vel-sed-recusandae-impedit.html",
                    "deleted_at": null,
                    "created_at": "1981-10-04 20:14:20",
                    "updated_at": "1982-02-27 09:51:50"
                },
                {
                    "id": 22,
                    "title": "Mr.",
                    "summary": "Dolorum a numquam rerum est voluptas reprehenderit voluptatum quia est dolorum molestias ut consequatur eum quos voluptate ut quia.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Carlo Wiegand DVM",
                    "tags": "tag-22",
                    "imdb_rate": 22,
                    "pdf_file": "http://www.bergstrom.net/quia-eius-doloribus-veniam-provident-veritatis-impedit-voluptatum.html",
                    "deleted_at": null,
                    "created_at": "1977-06-25 06:42:10",
                    "updated_at": "2009-07-09 09:22:32"
                },
                {
                    "id": 42,
                    "title": "Dr.",
                    "summary": "Voluptatem enim nostrum voluptatem explicabo praesentium rerum ab sapiente eos aut est facilis non necessitatibus ducimus neque distinctio ut vel commodi.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Nicolas Johnston III",
                    "tags": "tag-42",
                    "imdb_rate": 42,
                    "pdf_file": "https://will.biz/vel-expedita-aut-ipsa-blanditiis-voluptas-et-enim.html",
                    "deleted_at": null,
                    "created_at": "1975-05-17 03:36:16",
                    "updated_at": "2014-03-21 19:54:35"
                },
                {
                    "id": 45,
                    "title": "Prof.",
                    "summary": "Pariatur dolor beatae deleniti ut non ut atque dolores et nulla enim deserunt amet molestiae aut voluptates dolore harum pariatur quis est ex dicta omnis eveniet ad accusantium.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Lacy Barrows",
                    "tags": "tag-45",
                    "imdb_rate": 45,
                    "pdf_file": "http://davis.com/officia-et-voluptate-odio-consequuntur-vero-cupiditate.html",
                    "deleted_at": null,
                    "created_at": "2002-01-28 11:01:20",
                    "updated_at": "2012-06-02 16:10:03"
                }
            ]
        },
        {
            "id": 1,
            "title": "Dr.",
            "summary": "Atque autem facere minus quod qui assumenda ut aliquid error reiciendis officia eius illo vel nihil nobis vitae aperiam voluptas doloribus dolor magni nulla.",
            "cover_image": "",
            "genres": "Fighting",
            "author": "Prof. Murphy Stamm PhD",
            "tags": "tag-1",
            "imdb_rate": 1,
            "pdf_file": "http://www.tremblay.com/harum-ab-eos-sit-culpa-officiis-quia.html",
            "created_at": "08/11/2000 16:11:43",
            "updated_at": "18/12/2014 17:09:15",
            "comments": [
                {
                    "id": 1,
                    "movie_id": 1,
                    "email": "dlakin@example.com",
                    "comment": "Expedita natus mollitia et expedita. Velit consequuntur ut quod est incidunt iusto quia. Facilis est ullam omnis dolorum.",
                    "created_at": "31/08/2013 01:31:57",
                    "updated_at": "09/08/2005 05:49:44"
                }
            ],
            "related_movies": [
                {
                    "id": 1,
                    "title": "Dr.",
                    "summary": "Atque autem facere minus quod qui assumenda ut aliquid error reiciendis officia eius illo vel nihil nobis vitae aperiam voluptas doloribus dolor magni nulla.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Murphy Stamm PhD",
                    "tags": "tag-1",
                    "imdb_rate": 1,
                    "pdf_file": "http://www.tremblay.com/harum-ab-eos-sit-culpa-officiis-quia.html",
                    "deleted_at": null,
                    "created_at": "2000-11-08 16:11:43",
                    "updated_at": "2014-12-18 17:09:15"
                },
                {
                    "id": 3,
                    "title": "DDDDD",
                    "summary": "Optio aliquam quas est veniam quis veritatis ratione modi doloremque vero unde impedit quidem quaerat ut explicabo ullam quos sunt et omnis nulla rerum eos et dolorem voluptatem recusandae quia reprehenderit repellendus.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Seamus Hagenes",
                    "tags": "tag-3",
                    "imdb_rate": 3,
                    "pdf_file": "http://prosacco.com/ut-non-expedita-qui-fugit-ea-quis-ipsum",
                    "deleted_at": "2022-10-29 10:05:21",
                    "created_at": "1983-12-14 03:46:38",
                    "updated_at": "2022-10-29 10:05:21"
                },
                {
                    "id": 9,
                    "title": "Dr.",
                    "summary": "Cumque ratione quo eum ullam autem itaque aut voluptas consectetur aspernatur architecto perspiciatis sunt voluptatem officiis molestiae qui culpa molestias repellat ex voluptas voluptatibus sunt alias voluptas velit voluptatum officia consequatur corporis est numquam quis maiores voluptatem.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Miss Hanna Anderson DDS",
                    "tags": "tag-9",
                    "imdb_rate": 9,
                    "pdf_file": "http://www.macejkovic.com/voluptatum-consequuntur-atque-enim",
                    "deleted_at": null,
                    "created_at": "2004-09-23 20:10:54",
                    "updated_at": "2019-09-18 18:44:46"
                },
                {
                    "id": 19,
                    "title": "Prof.",
                    "summary": "Praesentium soluta sit exercitationem corrupti ducimus perferendis rerum vero et rerum assumenda reprehenderit animi quod a voluptates fugiat natus ut impedit fugiat molestiae temporibus fugit voluptatem sit explicabo expedita qui velit ea placeat modi et sed voluptates et et veritatis.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Haleigh Wilderman",
                    "tags": "tag-19",
                    "imdb_rate": 19,
                    "pdf_file": "http://ohara.com/provident-praesentium-quo-vel-sed-recusandae-impedit.html",
                    "deleted_at": null,
                    "created_at": "1981-10-04 20:14:20",
                    "updated_at": "1982-02-27 09:51:50"
                },
                {
                    "id": 22,
                    "title": "Mr.",
                    "summary": "Dolorum a numquam rerum est voluptas reprehenderit voluptatum quia est dolorum molestias ut consequatur eum quos voluptate ut quia.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Carlo Wiegand DVM",
                    "tags": "tag-22",
                    "imdb_rate": 22,
                    "pdf_file": "http://www.bergstrom.net/quia-eius-doloribus-veniam-provident-veritatis-impedit-voluptatum.html",
                    "deleted_at": null,
                    "created_at": "1977-06-25 06:42:10",
                    "updated_at": "2009-07-09 09:22:32"
                },
                {
                    "id": 42,
                    "title": "Dr.",
                    "summary": "Voluptatem enim nostrum voluptatem explicabo praesentium rerum ab sapiente eos aut est facilis non necessitatibus ducimus neque distinctio ut vel commodi.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Prof. Nicolas Johnston III",
                    "tags": "tag-42",
                    "imdb_rate": 42,
                    "pdf_file": "https://will.biz/vel-expedita-aut-ipsa-blanditiis-voluptas-et-enim.html",
                    "deleted_at": null,
                    "created_at": "1975-05-17 03:36:16",
                    "updated_at": "2014-03-21 19:54:35"
                },
                {
                    "id": 45,
                    "title": "Prof.",
                    "summary": "Pariatur dolor beatae deleniti ut non ut atque dolores et nulla enim deserunt amet molestiae aut voluptates dolore harum pariatur quis est ex dicta omnis eveniet ad accusantium.",
                    "image_path": "",
                    "generes": "Fighting",
                    "author": "Lacy Barrows",
                    "tags": "tag-45",
                    "imdb_rate": 45,
                    "pdf_file": "http://davis.com/officia-et-voluptate-odio-consequuntur-vero-cupiditate.html",
                    "deleted_at": null,
                    "created_at": "2002-01-28 11:01:20",
                    "updated_at": "2012-06-02 16:10:03"
                }
            ]
        },
        {
            "id": 30,
            "title": "Mrs.",
            "summary": "Quaerat delectus facilis fuga et ullam atque quos nesciunt voluptates sapiente autem rem enim non magni officiis omnis ea sapiente sit corrupti eius.",
            "cover_image": "",
            "genres": "Horror",
            "author": "Reuben Bartoletti",
            "tags": "tag-30",
            "imdb_rate": 30,
            "pdf_file": "http://www.gusikowski.com/veniam-dolorem-unde-nemo-et-at-neque-blanditiis-iusto",
            "created_at": "21/10/1999 17:38:37",
            "updated_at": "20/02/1998 19:53:54",
            "comments": [
                {
                    "id": 30,
                    "movie_id": 30,
                    "email": "dustin84@example.com",
                    "comment": "Repudiandae sed et aliquam possimus iure aut corrupti. Tempore voluptas cupiditate et nobis suscipit recusandae. Neque soluta amet vero reiciendis consequuntur illum.",
                    "created_at": "11/02/1988 05:17:30",
                    "updated_at": "08/07/1979 06:21:53"
                }
            ],
            "related_movies": [
                {
                    "id": 5,
                    "title": "Prof.",
                    "summary": "Quo quod suscipit culpa eos animi quae et natus fuga autem quas mollitia reiciendis maiores velit tempora nisi nihil sit ut laborum veritatis enim iure officia possimus nihil ut sed minus et fugiat vel.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Cheyenne Veum",
                    "tags": "tag-5",
                    "imdb_rate": 5,
                    "pdf_file": "http://www.gutmann.biz/nulla-et-soluta-laudantium-veritatis-pariatur-reiciendis.html",
                    "deleted_at": null,
                    "created_at": "1974-07-16 22:40:27",
                    "updated_at": "1975-07-12 19:27:58"
                },
                {
                    "id": 6,
                    "title": "Prof.",
                    "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Dr. Berniece Macejkovic",
                    "tags": "tag-6",
                    "imdb_rate": 6,
                    "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
                    "deleted_at": null,
                    "created_at": "2002-12-22 20:46:54",
                    "updated_at": "2008-01-21 23:12:48"
                },
                {
                    "id": 15,
                    "title": "Dr.",
                    "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Chester McLaughlin",
                    "tags": "tag-15",
                    "imdb_rate": 15,
                    "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
                    "deleted_at": null,
                    "created_at": "2013-10-14 08:49:15",
                    "updated_at": "1996-09-09 06:02:23"
                },
                {
                    "id": 16,
                    "title": "Mrs.",
                    "summary": "Minima amet distinctio voluptas ut assumenda odit vero et voluptatibus provident praesentium quaerat eos amet ullam molestiae porro animi molestiae vitae laboriosam quo officia reprehenderit accusantium recusandae dolore voluptatem minima ut sit sunt dicta nihil.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Waldo Bogisich",
                    "tags": "tag-16",
                    "imdb_rate": 16,
                    "pdf_file": "http://stark.com/distinctio-dolor-vitae-laborum-eum",
                    "deleted_at": null,
                    "created_at": "1984-01-21 02:36:09",
                    "updated_at": "1970-03-14 16:31:31"
                },
                {
                    "id": 21,
                    "title": "Dr.",
                    "summary": "Hic consequatur quae non ut autem vel necessitatibus sed quia totam a non qui voluptas doloremque est quasi dolorem sed dolor beatae incidunt.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Marvin Emard DVM",
                    "tags": "tag-21",
                    "imdb_rate": 21,
                    "pdf_file": "https://stroman.com/aliquam-natus-nulla-non-enim.html",
                    "deleted_at": null,
                    "created_at": "1992-03-05 06:45:53",
                    "updated_at": "2012-01-12 22:57:13"
                },
                {
                    "id": 24,
                    "title": "Mr.",
                    "summary": "Recusandae mollitia nihil soluta ducimus quas quos ut iusto saepe rerum doloremque et voluptatem corrupti quas porro doloribus quaerat eos sit atque numquam dolores quis distinctio non voluptas vel ab.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Travon Volkman Jr.",
                    "tags": "tag-24",
                    "imdb_rate": 24,
                    "pdf_file": "http://www.russel.com/harum-dicta-libero-officia.html",
                    "deleted_at": null,
                    "created_at": "1972-02-17 04:26:56",
                    "updated_at": "2008-07-18 01:03:38"
                },
                {
                    "id": 28,
                    "title": "Ms.",
                    "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Telly Halvorson",
                    "tags": "tag-28",
                    "imdb_rate": 28,
                    "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
                    "deleted_at": null,
                    "created_at": "2007-09-24 05:45:28",
                    "updated_at": "1979-09-03 23:13:45"
                }
            ]
        },
        {
            "id": 35,
            "title": "Mr.",
            "summary": "Incidunt ratione enim voluptas eligendi debitis consequatur ad aperiam eaque esse ducimus aut magnam ut sunt nisi facilis nemo est qui numquam ut maiores rerum sequi reiciendis distinctio tempore corrupti veniam dolore.",
            "cover_image": "",
            "genres": "Horror",
            "author": "Pat Farrell",
            "tags": "tag-35",
            "imdb_rate": 35,
            "pdf_file": "http://conroy.com/reprehenderit-consequatur-odit-qui-facilis-ut-explicabo-suscipit.html",
            "created_at": "20/04/1999 19:26:25",
            "updated_at": "15/06/1976 10:14:20",
            "comments": [
                {
                    "id": 35,
                    "movie_id": 35,
                    "email": "aniya.hansen@example.net",
                    "comment": "Voluptatum dolorem deleniti nulla corporis et possimus ipsam. Iste tempora quidem error dolores veritatis. Vel fugit et in porro debitis pariatur. Omnis odit repellendus veritatis sunt vel.",
                    "created_at": "01/04/2013 16:58:31",
                    "updated_at": "03/12/2020 07:44:00"
                }
            ],
            "related_movies": [
                {
                    "id": 5,
                    "title": "Prof.",
                    "summary": "Quo quod suscipit culpa eos animi quae et natus fuga autem quas mollitia reiciendis maiores velit tempora nisi nihil sit ut laborum veritatis enim iure officia possimus nihil ut sed minus et fugiat vel.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Cheyenne Veum",
                    "tags": "tag-5",
                    "imdb_rate": 5,
                    "pdf_file": "http://www.gutmann.biz/nulla-et-soluta-laudantium-veritatis-pariatur-reiciendis.html",
                    "deleted_at": null,
                    "created_at": "1974-07-16 22:40:27",
                    "updated_at": "1975-07-12 19:27:58"
                },
                {
                    "id": 6,
                    "title": "Prof.",
                    "summary": "Minima deleniti quod dolorum quia sunt dolor consequuntur ducimus fugit voluptatem enim voluptatem minima nisi veniam temporibus occaecati cumque nisi omnis maxime.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Dr. Berniece Macejkovic",
                    "tags": "tag-6",
                    "imdb_rate": 6,
                    "pdf_file": "https://www.parker.net/voluptas-voluptatem-voluptatibus-unde-a-excepturi-sunt-velit",
                    "deleted_at": null,
                    "created_at": "2002-12-22 20:46:54",
                    "updated_at": "2008-01-21 23:12:48"
                },
                {
                    "id": 15,
                    "title": "Dr.",
                    "summary": "Rerum ullam quasi sunt id at ab quam vel optio et neque modi optio explicabo qui cupiditate placeat neque explicabo dolorum fuga sed aut optio eaque et nisi voluptatem explicabo sunt officia molestiae sit omnis.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Chester McLaughlin",
                    "tags": "tag-15",
                    "imdb_rate": 15,
                    "pdf_file": "http://lubowitz.com/ea-optio-quas-iusto.html",
                    "deleted_at": null,
                    "created_at": "2013-10-14 08:49:15",
                    "updated_at": "1996-09-09 06:02:23"
                },
                {
                    "id": 16,
                    "title": "Mrs.",
                    "summary": "Minima amet distinctio voluptas ut assumenda odit vero et voluptatibus provident praesentium quaerat eos amet ullam molestiae porro animi molestiae vitae laboriosam quo officia reprehenderit accusantium recusandae dolore voluptatem minima ut sit sunt dicta nihil.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Waldo Bogisich",
                    "tags": "tag-16",
                    "imdb_rate": 16,
                    "pdf_file": "http://stark.com/distinctio-dolor-vitae-laborum-eum",
                    "deleted_at": null,
                    "created_at": "1984-01-21 02:36:09",
                    "updated_at": "1970-03-14 16:31:31"
                },
                {
                    "id": 21,
                    "title": "Dr.",
                    "summary": "Hic consequatur quae non ut autem vel necessitatibus sed quia totam a non qui voluptas doloremque est quasi dolorem sed dolor beatae incidunt.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Marvin Emard DVM",
                    "tags": "tag-21",
                    "imdb_rate": 21,
                    "pdf_file": "https://stroman.com/aliquam-natus-nulla-non-enim.html",
                    "deleted_at": null,
                    "created_at": "1992-03-05 06:45:53",
                    "updated_at": "2012-01-12 22:57:13"
                },
                {
                    "id": 24,
                    "title": "Mr.",
                    "summary": "Recusandae mollitia nihil soluta ducimus quas quos ut iusto saepe rerum doloremque et voluptatem corrupti quas porro doloribus quaerat eos sit atque numquam dolores quis distinctio non voluptas vel ab.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Prof. Travon Volkman Jr.",
                    "tags": "tag-24",
                    "imdb_rate": 24,
                    "pdf_file": "http://www.russel.com/harum-dicta-libero-officia.html",
                    "deleted_at": null,
                    "created_at": "1972-02-17 04:26:56",
                    "updated_at": "2008-07-18 01:03:38"
                },
                {
                    "id": 28,
                    "title": "Ms.",
                    "summary": "Nihil dolore accusamus a aliquid nesciunt quae voluptatibus ratione eveniet non corrupti omnis est exercitationem dolorem nam reprehenderit sed inventore delectus distinctio et repellat dolore ratione architecto velit assumenda consequatur et.",
                    "image_path": "",
                    "generes": "Horror",
                    "author": "Telly Halvorson",
                    "tags": "tag-28",
                    "imdb_rate": 28,
                    "pdf_file": "http://www.lindgren.org/dolorem-repudiandae-possimus-aliquam-nobis",
                    "deleted_at": null,
                    "created_at": "2007-09-24 05:45:28",
                    "updated_at": "1979-09-03 23:13:45"
                }
            ]
        },
        {
            "id": 43,
            "title": "Ms.",
            "summary": "Vitae aut reiciendis autem cumque omnis ut nulla esse ducimus cum laboriosam omnis voluptas totam debitis ea pariatur fuga iste quod quas nihil ut veniam est error voluptas consequuntur rerum.",
            "cover_image": "",
            "genres": "Drama",
            "author": "Toby Dickens",
            "tags": "tag-43",
            "imdb_rate": 43,
            "pdf_file": "http://brekke.info/soluta-amet-dolorem-laudantium-corrupti.html",
            "created_at": "03/06/1994 21:25:19",
            "updated_at": "20/05/2022 12:24:42",
            "comments": [
                {
                    "id": 43,
                    "movie_id": 43,
                    "email": "ibernier@example.com",
                    "comment": "Velit hic aut recusandae quidem corporis. Quisquam tempore et aspernatur. Saepe occaecati quis quasi et doloremque neque omnis. Cupiditate perferendis vel et nobis.",
                    "created_at": "31/08/2018 14:36:50",
                    "updated_at": "29/08/1987 06:33:22"
                }
            ],
            "related_movies": [
                {
                    "id": 2,
                    "title": "Mrs.",
                    "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Renee Kohler",
                    "tags": "tag-2",
                    "imdb_rate": 2,
                    "pdf_file": "http://www.hammes.com/",
                    "deleted_at": null,
                    "created_at": "1981-07-20 22:25:45",
                    "updated_at": "1978-04-16 06:24:34"
                },
                {
                    "id": 13,
                    "title": "Mrs.",
                    "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Agustina Fisher",
                    "tags": "tag-13",
                    "imdb_rate": 13,
                    "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                    "deleted_at": null,
                    "created_at": "2012-01-11 06:03:14",
                    "updated_at": "1982-09-27 19:47:10"
                },
                {
                    "id": 14,
                    "title": "Prof.",
                    "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Muriel Beer",
                    "tags": "tag-14",
                    "imdb_rate": 14,
                    "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                    "deleted_at": null,
                    "created_at": "2015-07-22 12:49:38",
                    "updated_at": "1980-06-13 11:05:29"
                },
                {
                    "id": 23,
                    "title": "Miss",
                    "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Lula Konopelski DVM",
                    "tags": "tag-23",
                    "imdb_rate": 23,
                    "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                    "deleted_at": null,
                    "created_at": "2019-09-30 20:31:22",
                    "updated_at": "1989-11-21 06:14:42"
                },
                {
                    "id": 26,
                    "title": "Dr.",
                    "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Antonina Sawayn MD",
                    "tags": "tag-26",
                    "imdb_rate": 26,
                    "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                    "deleted_at": null,
                    "created_at": "1989-05-17 17:33:13",
                    "updated_at": "1998-08-01 12:06:34"
                },
                {
                    "id": 27,
                    "title": "Mr.",
                    "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Favian Schaefer",
                    "tags": "tag-27",
                    "imdb_rate": 27,
                    "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                    "deleted_at": null,
                    "created_at": "2014-02-18 05:01:16",
                    "updated_at": "1986-07-05 12:03:47"
                },
                {
                    "id": 31,
                    "title": "Mrs.",
                    "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                    "image_path": "",
                    "generes": "Drama",
                    "author": "Mr. Sidney Kertzmann Sr.",
                    "tags": "tag-31",
                    "imdb_rate": 31,
                    "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                    "deleted_at": null,
                    "created_at": "2017-02-09 03:27:03",
                    "updated_at": "2005-07-09 22:41:07"
                }
            ]
        },
        {
            "id": 17,
            "title": "Mr.",
            "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
            "cover_image": "",
            "genres": "Funny",
            "author": "Dr. Ford Bahringer II",
            "tags": "tag-17",
            "imdb_rate": 17,
            "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
            "created_at": "31/01/1993 22:38:12",
            "updated_at": "29/11/1986 22:55:04",
            "comments": [
                {
                    "id": 17,
                    "movie_id": 17,
                    "email": "rosario58@example.net",
                    "comment": "Sed iure ut similique ut ratione. Laboriosam sint dicta necessitatibus ut. Sit nemo provident voluptatem consequatur. Nihil non possimus facilis quasi minus ea.",
                    "created_at": "24/05/2007 06:15:07",
                    "updated_at": "10/03/1995 23:04:14"
                }
            ],
            "related_movies": [
                {
                    "id": 4,
                    "title": "Prof.",
                    "summary": "Et dolores aut consequatur sit eveniet et facilis magnam nisi aut similique aliquam doloremque nihil quo dicta est itaque debitis et enim rerum qui minima consectetur quod et cupiditate et quo et sint dignissimos pariatur voluptas nulla consequatur ea reprehenderit non praesentium.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Mrs. Katrine Gleason",
                    "tags": "tag-4",
                    "imdb_rate": 4,
                    "pdf_file": "http://mcdermott.com/similique-adipisci-in-ducimus-ullam-voluptatibus-vel-quia.html",
                    "deleted_at": null,
                    "created_at": "1984-09-19 22:26:08",
                    "updated_at": "1971-05-12 11:19:48"
                },
                {
                    "id": 7,
                    "title": "Prof.",
                    "summary": "Repudiandae quas maiores assumenda non iste pariatur quibusdam labore asperiores recusandae inventore ipsam vero quaerat ex consequatur rerum omnis ullam nobis rerum officia tempora commodi eos porro optio molestiae aut placeat assumenda magni minus ad laborum in nobis maiores et consequatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Burdette Wuckert",
                    "tags": "tag-7",
                    "imdb_rate": 7,
                    "pdf_file": "http://huel.com/aut-ducimus-corrupti-dolor",
                    "deleted_at": null,
                    "created_at": "2012-06-12 14:10:53",
                    "updated_at": "2012-02-20 17:27:46"
                },
                {
                    "id": 8,
                    "title": "Miss",
                    "summary": "Labore et ut explicabo dolorum quis deserunt omnis est deserunt iure aspernatur sit laborum distinctio perferendis ab reprehenderit ratione et alias consequuntur deserunt quis maiores non veritatis aut et praesentium est distinctio perspiciatis quaerat amet minima adipisci quam iste quia.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Peggie Schulist",
                    "tags": "tag-8",
                    "imdb_rate": 8,
                    "pdf_file": "http://ullrich.net/rerum-expedita-et-autem-assumenda-ipsam-quis",
                    "deleted_at": null,
                    "created_at": "2002-06-17 20:23:32",
                    "updated_at": "1990-09-01 19:23:40"
                },
                {
                    "id": 10,
                    "title": "Dr.",
                    "summary": "Voluptate repudiandae occaecati vel ut et placeat et libero omnis neque ut perferendis doloremque fuga consectetur ullam aperiam sed consectetur voluptas velit quia esse nemo aspernatur quia nostrum aspernatur eum ullam tempore libero maxime odio voluptatum ipsam non sed qui reiciendis doloremque occaecati.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Ms. Vesta Heathcote DDS",
                    "tags": "tag-10",
                    "imdb_rate": 10,
                    "pdf_file": "http://predovic.com/laboriosam-reprehenderit-accusantium-qui-dignissimos-veniam",
                    "deleted_at": null,
                    "created_at": "2017-01-08 02:06:54",
                    "updated_at": "1973-09-20 08:50:36"
                },
                {
                    "id": 11,
                    "title": "Ms.",
                    "summary": "Ullam et itaque laborum ad veritatis quia possimus iste ut temporibus repellendus error quo voluptatem dolores sed consequuntur vel laboriosam aut illo aperiam maxime eligendi eligendi ut voluptas fugiat sunt rerum nihil similique facilis dolore odit ipsum sapiente repudiandae non.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Deontae Kemmer Jr.",
                    "tags": "tag-11",
                    "imdb_rate": 11,
                    "pdf_file": "http://www.conn.com/omnis-dignissimos-dolor-iste-ut-deserunt-et-corporis",
                    "deleted_at": null,
                    "created_at": "2013-10-07 13:50:58",
                    "updated_at": "2020-12-11 13:09:34"
                },
                {
                    "id": 12,
                    "title": "Dr.",
                    "summary": "Fugiat aspernatur expedita porro harum aut quod molestiae consequuntur excepturi placeat rerum quis aut asperiores veritatis sint dolores ut totam laboriosam incidunt laudantium qui ullam deleniti et qui unde temporibus ut provident optio adipisci nam nesciunt exercitationem et quidem.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Edison Stiedemann",
                    "tags": "tag-12",
                    "imdb_rate": 12,
                    "pdf_file": "http://kirlin.biz/",
                    "deleted_at": null,
                    "created_at": "1974-05-12 13:17:27",
                    "updated_at": "2010-03-23 17:22:04"
                },
                {
                    "id": 17,
                    "title": "Mr.",
                    "summary": "Pariatur et modi a iste fugiat quisquam omnis accusamus rerum qui quia eos possimus ratione consectetur sed aut eaque assumenda est impedit velit voluptas distinctio inventore itaque veritatis nesciunt aspernatur.",
                    "image_path": "",
                    "generes": "Funny",
                    "author": "Dr. Ford Bahringer II",
                    "tags": "tag-17",
                    "imdb_rate": 17,
                    "pdf_file": "https://www.walker.biz/quia-ut-quod-recusandae-inventore",
                    "deleted_at": null,
                    "created_at": "1993-01-31 22:38:12",
                    "updated_at": "1986-11-29 22:55:04"
                }
            ]
        }
    ],
    "errors": {},
    "duration": 0.205
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
            "method": "GET",
            "endpoint": "/api/1/movies/?limit=dfdsfd&offset=ddd"
        },
        "data": [],
        "error": [
            {
                "attribute": "limit",
                "messages": "The limit must be an integer."
            },
            {
                "attribute": "offset",
                "messages": "The offset must be an integer."
            }
        ]
    }
    ```

Get Movies Details

* **URL**

  /api/1/movies/{id}

* **Method:** `GET`

* **Header:** `Accept:application/json`

* **Success Movies List Response:**

  * **Code:** 200 <br />
    
    **Content:** 

    ```javascript
    {
    "success": 1,
    "code": 200,
    "meta": {
        "method": "GET",
        "endpoint": "/api/1/movies/32"
    },
    "data": {
        "id": 32,
        "title": "Mr.",
        "summary": "Consectetur iusto est aperiam voluptas qui unde qui cumque est sequi quibusdam recusandae minima quia in cumque animi provident ut.",
        "cover_image": "",
        "genres": "Drama",
        "author": "Tierra Fahey",
        "tags": "tag-32",
        "imdb_rate": 32,
        "pdf_file": "http://www.gulgowski.com/dolorem-pariatur-id-vitae-dicta",
        "created_at": "29/09/2022 02:55:06",
        "updated_at": "27/01/1976 09:42:56",
        "comments": [
            {
                "id": 32,
                "movie_id": 32,
                "email": "dbrakus@example.com",
                "comment": "Ut quia eaque aliquid eum tenetur magni quia. Dolores est ut ratione. Aut ut autem aspernatur sit perspiciatis consectetur laborum.",
                "created_at": "11/10/1972 09:59:25",
                "updated_at": "17/04/2008 04:26:56"
            }
        ],
        "related_movies": [
            {
                "id": 2,
                "title": "Mrs.",
                "summary": "Consequatur et vel dolore veritatis quis omnis sit excepturi dolore occaecati sint unde nobis veniam adipisci nisi quidem quo quidem sed minima ducimus vel commodi sit est consectetur quo sed voluptatem.",
                "image_path": "",
                "generes": "Drama",
                "author": "Renee Kohler",
                "tags": "tag-2",
                "imdb_rate": 2,
                "pdf_file": "http://www.hammes.com/",
                "deleted_at": null,
                "created_at": "1981-07-20 22:25:45",
                "updated_at": "1978-04-16 06:24:34"
            },
            {
                "id": 13,
                "title": "Mrs.",
                "summary": "Magnam praesentium sint deserunt doloribus rerum sed quod veniam distinctio debitis est quasi distinctio qui consequatur modi aut veniam eos veniam placeat aut quod sunt iusto natus esse consectetur qui voluptate eaque est incidunt sit molestiae animi quia odio delectus.",
                "image_path": "",
                "generes": "Drama",
                "author": "Agustina Fisher",
                "tags": "tag-13",
                "imdb_rate": 13,
                "pdf_file": "https://www.prosacco.com/qui-qui-officia-facere-similique",
                "deleted_at": null,
                "created_at": "2012-01-11 06:03:14",
                "updated_at": "1982-09-27 19:47:10"
            },
            {
                "id": 14,
                "title": "Prof.",
                "summary": "Molestiae alias aspernatur ex placeat quis aut quam aut maiores corporis omnis soluta enim quae non optio fugiat quia doloremque nam a rerum fugiat iste enim quia eos temporibus.",
                "image_path": "",
                "generes": "Drama",
                "author": "Muriel Beer",
                "tags": "tag-14",
                "imdb_rate": 14,
                "pdf_file": "http://lakin.com/fuga-mollitia-qui-laboriosam-tempore-dolores-dolores-illo",
                "deleted_at": null,
                "created_at": "2015-07-22 12:49:38",
                "updated_at": "1980-06-13 11:05:29"
            },
            {
                "id": 23,
                "title": "Miss",
                "summary": "Non rem doloremque voluptatibus reiciendis quibusdam fugit perferendis molestiae corrupti fugiat quis omnis vitae in fuga odit delectus accusantium incidunt minus minima magni aut in ducimus corporis adipisci.",
                "image_path": "",
                "generes": "Drama",
                "author": "Mr. Lula Konopelski DVM",
                "tags": "tag-23",
                "imdb_rate": 23,
                "pdf_file": "http://www.kilback.com/aspernatur-fugit-magnam-porro.html",
                "deleted_at": null,
                "created_at": "2019-09-30 20:31:22",
                "updated_at": "1989-11-21 06:14:42"
            },
            {
                "id": 26,
                "title": "Dr.",
                "summary": "Sit sed perspiciatis incidunt illo magnam molestiae dolores aut molestiae odio molestiae est in est excepturi a ut officiis et rerum earum non expedita molestiae natus aut eum dignissimos qui sunt molestiae quaerat accusantium aperiam doloribus.",
                "image_path": "",
                "generes": "Drama",
                "author": "Antonina Sawayn MD",
                "tags": "tag-26",
                "imdb_rate": 26,
                "pdf_file": "http://koss.com/nihil-aut-temporibus-sed-ut-modi",
                "deleted_at": null,
                "created_at": "1989-05-17 17:33:13",
                "updated_at": "1998-08-01 12:06:34"
            },
            {
                "id": 27,
                "title": "Mr.",
                "summary": "Reiciendis laborum sed distinctio dolorem aut ut ad sed ut rem quis repellendus recusandae itaque voluptatem qui aut est impedit quia illo neque labore quaerat vel nostrum ut porro quis facilis at autem.",
                "image_path": "",
                "generes": "Drama",
                "author": "Favian Schaefer",
                "tags": "tag-27",
                "imdb_rate": 27,
                "pdf_file": "http://www.hermann.com/asperiores-suscipit-explicabo-magnam.html",
                "deleted_at": null,
                "created_at": "2014-02-18 05:01:16",
                "updated_at": "1986-07-05 12:03:47"
            },
            {
                "id": 31,
                "title": "Mrs.",
                "summary": "Voluptatem ipsam fugiat reprehenderit fugiat ullam ratione eum a amet a vel maiores blanditiis numquam consequuntur in quibusdam officia.",
                "image_path": "",
                "generes": "Drama",
                "author": "Mr. Sidney Kertzmann Sr.",
                "tags": "tag-31",
                "imdb_rate": 31,
                "pdf_file": "http://stracke.org/occaecati-sed-fugit-et-officia-sed-fugit",
                "deleted_at": null,
                "created_at": "2017-02-09 03:27:03",
                "updated_at": "2005-07-09 22:41:07"
            }
        ]
    },
    "errors": {},
    "duration": 0.006
}
```