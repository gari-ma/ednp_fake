<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Setup Page </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        div:first-child::-webkit-scrollbar {
            width: 12px;
        }

        div:first-child::-webkit-scrollbar-track {
            background: #F1F1F1;
        }

        div:first-child::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 6px;
            border: 3px solid #F1F1F1;
        }

        div:first-child::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>
    <div class="flex overflow-hidden">
        <div class="all  overflow-auto w-1/2 items-center justify-center h-screen bg-cream-100 bg-center">
            <div class="pt-2 m-8">

                <form action="process-setup" method="post">
                    <div class="login text-center text-2xl font-medium">
                        Login
                    </div>

                    <div class="welcome-botton  text-center text-gray-400 mb-8">
                        Please login to access the system
                    </div>




                    <label for="Username">Username:</label>
                    <input type="text" id="name" name="Userame" class="p-2 rounded-full border-gray-300 mt-1.5 border-2  w-full" required><br>
                    <br>
                    <label for="password">Password:</label>
                    <input class="p-2 rounded-full border-gray-300 mt-1.5 border-2  w-full" type="password" id="password" name="password" required>

                    <br> <br>
                    <input class="rounded-full bg-purple-500 text-white font-bold  p-2 w-full" type="submit" value="Sign in">
                </form>
            </div>

        </div>


        <div class="second w-1/2 h-screen bg-gray-100 flex-col justify-center">
           

            <div class="datetime flex justify-center  text-2xl text-slate-600 font-extrabold mt-8 " id="times"></div>
            <div class="img flex justify-center">
                <img class="w-3/4 " src="https://raw.githubusercontent.com/gari-ma/ednp_fake/main/bg__1_-removebg-preview.png">

            </div>
        </div>
    </div>

</body>
<script>
    function currentTime() {
        let date = new Date();
        let hh = date.getHours();
        let mm = date.getMinutes();
        let ss = date.getSeconds();
        let session = "AM";

        if (hh === 0) {
            hh = 12;
        }
        if (hh > 12) {
            hh = hh - 12;
            session = "PM";
        }

        hh = (hh < 10) ? "0" + hh : hh;
        mm = (mm < 10) ? "0" + mm : mm;
        ss = (ss < 10) ? "0" + ss : ss;

        let time = hh + ":" + mm + ":" + ss + " " + session;

        document.getElementById("times").innerText = time;
        let t = setTimeout(function() {
            currentTime()
        }, 1000);
    }

    currentTime();
</script>

</html>
