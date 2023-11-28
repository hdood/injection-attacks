<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Attack</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            gap: 10rem;
            align-items: center;
            flex-direction: column;
            background-color: #130f40;
            font-family: 'Lato' !important;
        }

        .search-box {
            width: fit-content;
            height: fit-content;
            position: relative;
        }

        .input-search {
            height: 50px;
            width: 50px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
            transition: all .5s ease-in-out;
            background-color: #22a6b3;
            padding-right: 40px;
            color: #fff;
        }

        .input-search::placeholder {
            color: rgba(255, 255, 255, .5);
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: 100;
        }

        .btn-search {
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color: #ffffff;
            background-color: transparent;
            pointer-events: painted;
        }

        .btn-search:focus~.input-search {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, .5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .input-search:focus {
            width: 300px;
            border-radius: 0px;
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, .5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
        }

        .result-box {
            padding: 1rem;
            background: white;
            padding-top: 0;
            width: 20rem;

        }
    </style>
</head>

<body>

    <form class="search-box">
        <button class="btn-search" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z" />
            </svg>
        </button>
        <input type="text" class="input-search" name="query" placeholder="Type to Search...">
    </form>


    <div class="result-box" id="target">
    </div>



    <script>
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });



        const target = document.getElementById("target")
        const query = params.query;

        if (!query) {

            target.innerHTML = `
            <h2> Search for an item</h2>
        `
        } else {



            target.innerHTML = `
        
        <h1> Search Result for ${query}</h1>
        <ul>
           ${getItems()}
        </ul>
        `
        }


        function getItems() {

            // send requst to the server to get the items

            const items = [{
                    name: "item 1",
                    price: 1500
                },
                {
                    name: "item 2",
                    price: 2000
                },
                {
                    name: "item 3",
                    price: 4500
                }
            ]

            let result = "";

            items.forEach(item => result = result + `<li>${item.name} : ${item.price}</li>`)

            return result

        }
    </script>
    <?php
    if (isset($_GET['query'])) {
        $query = $_GET['query'];

        echo $query;
    }
    ?>



</body>

</html>