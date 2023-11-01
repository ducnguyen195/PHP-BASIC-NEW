<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title> WEATHER INFORMATION </title>
</head>
<body class="flex justify-center items-center mt-60">
    <div class="w-2/4 bg-gray-300 justify-center flex">
        <form action="" method="GET" class="w-2/4">
            <h1 class="flex justify-center mt-6"> WEATHER INFORMATION</h1>
            <section class="border mt-4">
                <select name="" id="" class="w-full" onchange="getWeatherInfo(dia_diem.id)" >
                    <option value=""> Chọn địa điểm </option>
                    <option value=""> Hà Nội </option>
                    <option value=""> Thành phố Hồ Chí Minh </option>
                    <option value=""> Thành phố Đà Nẵng </option>
                    <option value=""> Hà Giang </option>
                </select>
            </section>
            
            <section class="text-slate-50 bg-blue-500">
                <div class="flex justify-center mt-4 ">
                    <span class="pr-3 text-3xl pt-3"> <i class="fa-solid fa-cloud"></i> </span>
                    <span  class="pl-3 pt-3"> 
                        <p>Ha Noi,VN</p>
                        <?php 
                        echo '<p> '
                        ?>                        
                    </span>
                </div>
                <strong class=" weather-temp flex justify-center mt-4 text-4xl">°C</strong>
                <section class="flex  justify-center gap-8 my-5">
                    <div>
                        <p class="feels_like"> Cảm nhận: </p>
                        <p class="humidity"> Độ ẩm: </p>
                    </div>
                    <div class="mb-4">
                        <p class="speed_wind"> Tốc độ gió:  </p>
                        <p class="pressure"> Áp lực khí:  </p>
                    </div>
                </section>
            </section>

        </form>
    </div>
    <!-- <button onclick="getWeatherInfo(1)"> Check</button> -->
    <script>
        const dia_diem = [
            {
                id: 1,
                name:'Ha Noi',
                lat:21.021041,
                lng:105.844775,
            },
            {
                id: 2,
                name:'Thanh pho Ho Chi Minh',
                lat:21.021041,
                lng:105.844775,
            },
            {
                id: 3,
                name:'Thanh pho Da Nang',
                lat:21.021041,
                lng:105.844775,
            },
            {
                id: 4,
                name:'Ha Giang',
                lat:21.021041,
                lng:105.844775,
            },
        ]
        const OPEN_WEATHER_KEY = '1321df2f818db509afb44d386538daff';
        const OPEN_WEATHER_API = 'https://api.openweathermap.org/data/2.5/weather?lang=vi&';
        function getWeatherInfo(city_id) {
            
            const city = {
                id:1,
                lat:21.021041,
                lng:105.844775,
            }
            const apiUrl = `${OPEN_WEATHER_API}lat=${city.lat}&lon=${city.lng}&appid=${OPEN_WEATHER_KEY}`;
            console.log( "apiUrl",apiUrl);
            $.ajax ({
                url:apiUrl,
                method:'GET',
                dataType: 'json',
                success:function (response) {
                    console.log('response',response);
                    $('.weather-temp').text( Math.floor(response.main.temp - 273.15) + '°C');
                    $('.feels_like').text('Cảm nhận: ' + Math.floor(response.main.feels_like - 273.15) + '°C');
                    $('.humidity').text('Độ ẩm: ' + Math.floor(response.main.humidity) + '%');
                    $('.speed_wind').text('Tốc độ gió: ' + response.wind.speed + 'km/h');
                    $('.pressure').text('Áp lực khí: ' + response.main.pressure + 'hPa');
                },
                error:function (response){
                    console.log('Lỗi API');
                }
            });
        }
        document.getElementById
    </script>
</body>
</html>