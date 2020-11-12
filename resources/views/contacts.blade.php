@extends('layouts.master')

@section('content')

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        padding: 20px;
    }
</style>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: black">
        <div class="container">
        </div>
    </div>
    <div class="container">
        <!-- Example row of columns -->
        <div class="container" style="margin-left: 30%;">
            <form action="/" style="color: gold;">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." style="width:300px;"><br>

                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="width:300px;"><br>

                <label for="lname">E-mail</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your email.." style="width:300px;"><br>

                <label for="subject">Subject</label><br>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; width:300px;"></textarea><br>

                <input type="submit" value="Submit">
            </form><img src="img/thx.png" alt="thx" style="margin-left: 70px;">
        </div>
        <hr>
    </div>
</main>

@endsection