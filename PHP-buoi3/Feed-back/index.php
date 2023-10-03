<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" items-center  bg-contain  bg-cover bg-[url('./img/background.jpg')]">
<div class="flex justify-center">
    <h1 class=" my-14 text-slate-50 text-6xl"> FeedBack Form</h1>
</div>
<div class=" w-1/2 h-[30rem] m-auto  bg-cover bg-center bg-[url('./img/back.jpg')] ">
    <form class="p-12  " action="feedback.php" method="POST">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name">
                    <span class="fa fa-user text-violet-800"></span>
                    Name :
                </label>
                <input   class=" w-full p-1 outline-none border border-black" type="text" name="name" id="name" required    >
            </div>
            <div>
                <label for="email">
                    <span class="fa fa-envelope text-violet-800"></span>
                    Email :
                </label>
                <input  class=" w-full p-1 outline-none border border-black" type="email" name="email "  id="email" required>
            </div>
            <div class="col-span-2">
                <label for="type">
                    <span class="fa fa-comments text-violet-800"></span>
                    Feedback Type :
                </label>
                <label>
                    <select class=" w-full p-1 outline-none border border-black" name="select" required >
                        <option value=""> Select</option>
                        <option value=" Comments "  > Comments </option>
                        <option value=" Bug Reports "> Bug Reports</option>
                        <option value=" Questions "> Questions</option>
                        <option value=" Suggestions "> Suggestions</option>
                    </select>
                </label>
            </div>
            <div class=" col-span-2">
                <label for="describe">
                    <span class="fa fa-comments text-violet-800"></span>
                    Describe Feedback :
                </label>
                <textarea class=" w-full h-40 resize-none p-1 outline-none border border-black "  name="describe" id="describe" cols="30" rows="10" required></textarea>
            </div>
        </div>
       <div class="flex justify-center">
           <div class=" w-1/3 flex justify-center bg-orange-600 hover:bg-blue-500 cursor-pointer">
               <input  class=" text-2xl py-2 text-white hover:cursor-pointer" type="submit" name="submit">
           </div>
       </div>
    </form>
</div>

</body>
</html>
