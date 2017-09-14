<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 60vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 100px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Welcome to Your Contact List
                </div>
            </div>
        </div>
        <div class="container">
                <form method="Post" action="/addContact">
                {{csrf_field()}}
                        <p>Please enter the Contact information in the order it appears in the table below, ensuring the the ID entered is unique:</p>
                        <p>NM:<input type="text" class="form-control" id="NAME" name="NAME" required></p>
                        <p>CO:<input type="text" class="form-control" id="Company" name="Company"               required></p>
                        <p>PP:<input type="text" class="form-control" id="PreferredPhone" name="PreferredPhone" required></p>
                        <p>EM:<input type="text" class="form-control" id="Email" name="Email"                   required></p>
                        <p>PA:<input type="text" class="form-control" id="PostalAddress" name="PostalAddress"   required></p>
                        <p>MT:<input type="text" class="form-control" id="MeetingTime" name="MeetingTime"       required></p>
                        <p>ID:<input type="number" class="form-control" id="id" name="id"                       required></p>
                        <p><input type="submit"/></p>
                </form>
        </div>
<!--        <div class="container">
                <form method="Get" action"/removeContact">
                {{csrf_field()}}
                <p>ID of Contact You Wish to Remove: <input type="number" class="form-control" id="id" name="id" required>
                        <input type="submit" /></p>
                </form>
        </div>
-->
                <table class="table table-bordered">
                <thead>
                <tr>
                <th>NAME</th>
                <th>Company</th>
                <th>PreferredPhone</th>
                <th>Email</th>
                <th>PostalAddress</th>
                <th>MeetingTime</th>
                <th>ID</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $contact)
                <tr>
                <td>{{  $contact->NAME }}               </td>
                <td>{{  $contact->Company}}             </td>
                <td>{{  $contact->PreferredPhone}}      </td>
                <td>{{  $contact->Email}}               </td>
                <td>{{  $contact->PostalAddress}}       </td>
                <td>{{  $contact->MeetingTime}}         </td>
                <td>{{  $contact->id}}                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
        </body>
</html>
