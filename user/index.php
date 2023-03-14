<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <style>
        *{margin:0;padding:0;}
        html,body{width:100%;height:100%}
    </style>
</head>
<body>
    <main style="width:100%;height:100%;display:flex;justify-content:center;align-items: center;background-color:#2b74e2;">
        <section id="container" class="container" style="background-color:#f0f0f0;height:50%;padding:20px;color:#2b74e2;display: flex;align-items: center;justify-content: center;border-radius: 10px;box-shadow: 0px 2px 6px #fff;">
            <button onclick="search()" style="padding:10px;color:#fff;border:1px solid #2b74e2;border-radius:10px;background-color:#2b74e2;font-size:22px">Find Nearby Workshops</button>
        </section>
    </main>
    <script>
        function search(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
                function showPosition(position) {
                    container.innerHTML=`
                        <section style="display:flex;flex-direction:column;align-items:center">
                            <a href="https://maps.google.com?q=${position.coords.latitude},${position.coords.longitude}&s=workshops"  target="_blank">
                                <button style="padding:10px;color:#fff;border:1px solid #2b74e2;border-radius:10px;background-color:green;font-size:22px">Show Nearby Workshops</button>
                            </a>
                        </section>
                    `
                }
            } else {
                container.innerHTML=`
                <section style="display:flex;flex-direction:column;align-items:center">
                    <h1 id="time" style="font-size:60px;color:red">Geolocation is not supported by this browser.</h1>
                </section>
                `
            }
        }
    </script>
</body>
</html>