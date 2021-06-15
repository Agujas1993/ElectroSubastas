<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
            crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
            href="https://fonts.googleapis.com/css2?family=Itim&display=swap"
            rel="stylesheet"
    />
    <title>ElectroSubastas</title>
    <h1>ElectroSubastas</h1>
    <a href="login.php">Login</a>
    <style>
        * {
            font-family: "Arial", cursive;
        }

        nav {
            background-color: #ff8585;
        }

        .card-enabled {
            cursor: pointer;
        }

        .card-disabled {
            cursor: not-allowed;
        }

        img {
            max-width: 235px;
            max-height: 300px;
        }

        @media (min-width: 992px) {
            li {
                background-color: white;
            }

            .m-lg {
                margin-right: 1rem;
            }

            a:hover {
                color: #ff8585 !important;
            }
        }

        @media (max-width: 575.98px) {
            .img-bid {
                max-height: 150px;
            }

            .nopad {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }
    </style>
</head>
<body>


<div class="container my-5">
    <div class="row mb-4">
        <div class="col">
        </div>
        <div class="col">
        </div>
    </div>
    <div id="resultsDiv" class="row row-cols-1 row-cols-md-3 g-4"></div>
</div>
