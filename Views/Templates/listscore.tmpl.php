<!doctype html>
<html lang="fr">
<head>
    <title>Accueil - SandwichQuizz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/Css/style.css">
</head>
<body>
<?php $i = 0;
 ?>
<form action="/" method="POST">
    <div class="box">
        <div id="result">
            <div class="result_box">

                <div class="icon">
                    <a href="/">
                        <svg height="80mm" viewBox="0 0 247.12518 301.90335" width="80mm">
                            <path color="#000"
                                  d="m -2329.1196,7378.7344 -97.4882,43.0296 c 0,0 -45.0731,-8.6046 -63.2494,4.5386 -18.1764,13.1432 -15.5497,43.9682 -15.5497,43.9682 l 5.9887,83.5868 c 0,0 87.9399,53.9911 211.1817,81.2231 123.2417,27.232 228.486,44.6313 259.7219,33.756 43.1818,-15.0344 41.8674,-53.3653 46.5439,-50.209 4.6346,3.1281 278.9874,-110.9901 288.4048,-120.9359 8.7145,-9.2035 15.5498,-15.0343 17.1257,-25.719 1.5759,-10.6847 3.5722,-82.0739 3.5722,-82.0739 l -167.0541,-50.7761 222.6337,-113.5609 c 7.5647,-9.2979 25.4665,-12.5647 19.5739,-34.9809 -64.211,-22.218 -115.3736,-48.0101 -195.7391,-65.8033 0,0 -6.8542,-11.2779 28.4478,-4.5644 35.302,6.7134 49.4858,2.1747 55.6847,-4.6332 6.1989,-6.808 22.5891,-18.2492 0.7355,-36.782 -21.8537,-18.5328 -3.6773,-28.272 11.242,-39.9023 14.9193,-11.6303 48.719,-45.5933 5.1975,-81.5836 -12.5901,-10.4115 53.9165,-24.4446 36.4757,-69.4528 -17.4409,-45.0083 -32.4652,-53.5183 -52.4277,-66.3778 -19.9625,-12.8595 -53.4783,-32.3379 -53.4783,-32.3379 l 86.4689,-41.9825 6.7616,-113.476 c 0,0 -48.2251,-21.1803 -113.3657,-34.7963 -65.1406,-13.6159 -274.9564,-47.183 -274.9564,-47.183 l -337.4705,142.641 c 0,0 -53.0581,-0.7565 -67.452,8.0372 -14.394,8.7936 -26.4765,38.0111 -26.4765,38.0111 l 0.5253,66.5669 c 0,0 54.529,45.2919 73.756,55.0311 19.227,9.7392 43.7072,15.0343 43.7072,15.0343 0,0 -38.454,11.6303 -55.0543,37.9167 -16.6003,26.2863 -15.1294,52.9509 -15.1294,52.9509 l -28.5609,13.9854 18.3695,72.1544 117.1481,56.7331 c 0,0 -59.7822,9.1719 -34.6716,22.5987 -53.3733,12.6703 -40.5149,23.4209 -40.5149,23.4209 l 26.4361,14.1175 c 0,0 -64.5957,8.3167 -78.4644,26.7549 -13.8687,18.4383 -11.6623,40.7533 4.3077,46.4266 15.9699,5.6733 -19.6473,21.0858 -32.3602,35.6473 -12.7129,14.5615 -19.0168,26.0027 -19.0168,26.0027 z"
                                  fill="#FFFFFF" overflow="visible" paint-order="fill markers stroke"
                                  transform="translate(156.84187,213.51674) matrix(0.26458333,0,0,0.26458333,508.95285,-1943.665)"/>
                            <path d="m -2086.1993,7678.9909 c -5.0211,-0.7647 -20.7689,-3.4578 -34.9952,-5.9844 -14.2263,-2.5267 -29.9742,-5.2649 -34.9953,-6.0847 -81.872,-13.369 -147.9269,-29.636 -229.7512,-56.5793 -46.1788,-15.2059 -116.9042,-48.1967 -121.4225,-56.6393 -3.6891,-6.8929 -6.7343,-40.6669 -7.3311,-81.3052 -0.3624,-24.7076 0.4203,-28.8966 7.73,-41.3699 7.9351,-13.5404 8.7117,-14.002 31.8655,-18.9439 18.5426,-3.9578 26.2732,-4.3501 35.3512,-1.7936 7.1041,2.0005 13.0167,2.1898 15.2154,0.4872 7.0778,-5.4812 83.9776,-31.2595 88.6207,-29.4778 9.6447,3.7013 4.5524,10.0342 -11.238,13.9762 -24.1757,6.0356 -64.5669,23.3816 -72.2339,30.031 -6.3776,5.5314 -7.4098,5.6011 -16.1383,1.0873 -6.685,-3.4569 -13.6819,-4.3063 -24.7139,-2.9996 -17.808,2.1092 -29.1267,9.4192 -33.1161,21.3882 -2.3949,7.1841 -1.5252,9.7813 5.8941,17.602 4.787,5.0457 14.181,11.6945 20.8757,14.775 22.0421,10.1425 145.1815,51.5473 194.7974,65.4998 16.7141,4.7003 31.0813,9.5473 31.9269,10.7715 0.846,1.2242 14.5398,5.6069 30.4307,9.7399 15.8911,4.1328 36.4245,9.7424 45.6298,12.4656 9.2053,2.7236 22.899,5.0768 30.4306,5.2296 7.5316,0.1521 19.856,3.0464 27.3876,6.4299 19.5316,8.7753 56.4765,10.8157 71.0047,3.9216 17.4952,-8.302 28.8978,-21.8887 31.1884,-37.1615 2.2299,-14.8709 7.792,-22.215 16.825,-22.215 3.2945,0 11.4645,-2.7929 18.1556,-6.2063 6.6911,-3.4137 29.5737,-12.1388 50.8502,-19.3895 32.8249,-11.186 63.4238,-23.0345 90.4164,-35.0114 40.868,-18.133 56.429,-25.4589 83.6842,-39.3967 17.5737,-8.9868 36.6604,-20.9116 42.4148,-26.4996 l 10.4627,-10.1596 -13.5057,-5.6981 c -7.4281,-3.1341 -20.3526,-7.5057 -28.7211,-9.7153 -8.3684,-2.2093 -16.5162,-5.1845 -18.1062,-6.6113 -1.59,-1.4272 -5.3393,-2.5946 -8.3319,-2.5946 -10.9669,0 -62.7565,-18.4552 -64.4938,-22.9821 -3.1757,-8.2765 5.8065,-7.9339 37.3004,1.422 38.1548,11.3351 80.7513,21.5601 89.8172,21.5601 12.2505,0 31.1999,11.3391 35.2369,21.0854 5.8998,14.2434 -4.0704,90.2518 -13.1455,100.2154 -10.0804,11.0676 -38.3386,29.0978 -55.234,35.2423 -8.3684,3.0434 -19.3235,7.9275 -24.3445,10.8534 -5.0211,2.9259 -14.6067,7.0538 -21.3014,9.173 -6.6948,2.1192 -12.857,4.8227 -13.6938,6.0076 -0.8369,1.185 -14.5307,7.035 -30.4307,13 -15.9,5.9647 -40.5488,15.8769 -54.7751,22.0263 -14.2263,6.1497 -33.3401,13.9074 -42.4751,17.2393 -9.135,3.3318 -20.6073,8.1252 -25.4939,10.6522 -4.8865,2.527 -14.5297,5.0077 -21.4292,5.5128 -12.2304,0.8956 -12.5825,1.2318 -14.066,13.4455 -1.4624,12.0423 -14.6608,30.724 -21.7061,30.724 -1.6128,0 -8.6858,2.9024 -15.7184,6.45 -12.8514,6.483 -49.5149,10.0166 -70.6042,6.8046 z m 52.0245,-18.0353 c 15.4356,-4.487 16.4463,-5.374 16.4709,-14.4545 0.03,-5.3205 0.8901,-16.8632 1.9454,-25.65 1.545,-12.8615 1.0517,-15.9761 -2.5291,-15.9761 -3.1717,0 -5.4108,6.2212 -7.8042,21.6827 -4.7846,30.9124 -9.897,34.0054 -9.897,5.9879 0,-19.0259 -0.6947,-21.9691 -4.8135,-20.3885 -2.6471,1.016 -6.0706,1.8471 -7.6076,1.8471 -1.5368,0 -2.7942,4.9069 -2.7942,10.9042 0,13.2452 -6.8356,12.8676 -9.1325,-0.5045 -1.4765,-8.5958 -2.4932,-9.0729 -31.9522,-14.9932 -16.735,-3.3632 -34.5354,-7.7811 -39.5564,-9.8178 -5.0211,-2.0368 -24.1924,-7.2069 -42.6029,-11.4897 -48.7514,-11.3406 -117.3491,-31.2992 -120.201,-34.9724 -0.8369,-1.0782 -8.3685,-3.771 -16.7369,-5.9842 -8.3684,-2.2132 -27.5397,-8.7768 -42.6029,-14.5857 -28.9876,-11.1787 -73.0198,-25.0639 -79.4808,-25.0639 -2.3438,0 -4.2198,4.9736 -4.7892,12.6966 -1.468,19.9208 -8.5434,18.6831 -8.5434,-1.4945 0,-15.7841 -0.4933,-16.865 -9.0619,-19.852 -4.984,-1.7373 -9.6012,-2.2135 -10.2603,-1.0584 -0.6595,1.1554 -1.4297,11.6732 -1.7121,23.3729 -0.5304,21.994 -4.6899,32.5257 -7.6971,19.4883 -0.9245,-4.0077 -2.0273,-17.4477 -2.4506,-29.8664 -1.0118,-29.6708 -6.8563,-31.8283 -6.8563,-2.5315 0,30.0673 -5.3987,31.0003 -8.8383,1.5273 -1.5136,-12.9711 -4.0694,-23.5838 -5.6798,-23.5838 -3.6423,0 -0.2496,34.3526 4.8628,49.2204 2.0127,5.8542 5.9976,12.9823 8.8553,15.84 4.5649,4.5649 39.6003,21.0011 81.4412,38.2069 40.7214,16.7451 179.3962,53.5667 229.7513,61.0046 19.5267,2.8845 38.0729,5.5615 83.6842,12.0791 26.8718,3.8401 39.0894,3.4965 56.5891,-1.5909 z m 40.7199,-28.2618 c 1.6931,-6.095 3.0859,-15.1094 3.0951,-20.0319 0,-8.5221 -0.1978,-8.6679 -4.4508,-3.0431 -4.3559,5.759 -4.4703,5.7356 -4.5646,-0.94 -0.052,-3.7658 -1.2675,-6.8469 -2.6983,-6.8469 -2.9539,0 -7.1454,42.1848 -4.6008,46.3018 2.8212,4.5646 9.9879,-3.806 13.2194,-15.4399 z m 48.758,-33.0106 c 5.8579,-2.4743 17.4977,-6.5803 25.8661,-9.1249 8.3684,-2.5443 22.7469,-8.3526 31.9521,-12.9075 9.2053,-4.5548 25.2955,-11.4148 35.756,-15.2442 10.4606,-3.8297 19.0192,-7.9119 19.0192,-9.072 0,-1.16 9.2433,-5.2925 20.5407,-9.1827 28.8555,-9.9368 96.9474,-43.4869 113.6642,-56.0045 13.5811,-10.1693 14.0662,-11.095 16.0701,-30.6522 1.1362,-11.0917 2.9198,-24.4361 3.9636,-29.6547 1.8425,-9.2122 1.6405,-9.4243 -6.9407,-7.2981 -4.8613,1.2044 -36.2578,15.6498 -69.7701,32.1006 -33.5123,16.4508 -69.1162,32.6469 -79.1196,35.9909 -10.0035,3.3444 -28.4585,10.5084 -41.0111,15.9198 -12.5526,5.4118 -31.0392,12.4964 -41.0814,15.7439 -10.0421,3.2476 -28.3555,10.8437 -40.6967,16.8802 l -22.4383,10.9757 1.8977,18.1565 c 1.0437,9.9861 1.8976,23.5417 1.8976,30.1239 0,11.9062 0.052,11.9568 9.89,9.8577 5.4394,-1.1607 14.6827,-4.1344 20.5406,-6.6084 z m -54.7751,-3.9374 c 0,-1.6737 -1.3694,-3.043 -3.0431,-3.043 -1.6736,0 -3.043,1.3693 -3.043,3.043 0,1.6737 1.3694,3.0431 3.043,3.0431 1.6737,0 3.0431,-1.3694 3.0431,-3.0431 z m -96.6173,-29.5734 c -5.2267,-1.8748 -4.8022,-6.9433 0.5813,-6.9433 5.0405,0 9.0297,5.0177 5.5545,6.9865 -1.2824,0.7267 -4.0436,0.7072 -6.1358,-0.043 z m -196.531,-57.6612 c -4.0385,-4.0384 -1.9016,-10.1434 3.5503,-10.1434 7.1789,0 9.6316,2.5577 7.5794,7.9053 -1.7203,4.4833 -7.685,5.6829 -11.1297,2.2381 z m -77.3446,-18.4154 c -6.1388,-2.2019 -4.3598,-9.9864 2.2823,-9.9864 3.3473,0 6.0861,1.9731 6.0861,4.3851 0,5.2925 -3.2202,7.4482 -8.3684,5.6013 z m 152.6379,-5.0441 c -2.5781,-6.7185 0.8517,-10.1487 5.5,-5.5001 2.7445,2.7446 2.7561,4.4456 0.049,7.1527 -2.7071,2.7071 -4.0269,2.3143 -5.549,-1.6526 z m -200.0589,-3.928 c -3.858,-3.858 -2.0051,-7.1004 4.0573,-7.1004 3.3812,0 6.0861,2.0288 6.0861,4.5646 0,4.6327 -6.4373,6.2422 -10.1434,2.5358 z m 328.1435,-22.2905 c -26.3085,-4.8759 -86.8752,-22.1906 -118.6794,-33.9277 -18.4106,-6.7942 -41.69,-15.0117 -51.7321,-18.2605 -19.534,-6.3201 -79.2435,-28.2643 -94.335,-34.6696 -5.021,-2.1314 -32.1003,-11.5357 -60.1765,-20.8986 -44.4449,-14.8218 -61.9784,-22.3147 -95.436,-40.7843 -8.7363,-4.8227 -8.9368,-8.3453 -1.1968,-21.0394 7.8456,-12.8673 41.0877,-30.3233 47.543,-24.9656 5.6674,4.7033 0.9579,10.7003 -12.9747,16.5217 -5.5725,2.3285 -10.1322,5.6287 -10.1322,7.334 0,2.9202 32.6463,13.916 64.5732,21.7497 7.8995,1.9385 16.1121,5.6324 18.2508,8.2093 3.4474,4.1538 2.1645,4.4344 -11.3196,2.4761 -15.8437,-2.3014 -69.0967,-14.918 -78.3513,-18.5633 -2.929,-1.1536 -5.3254,-0.8179 -5.3254,0.7456 0,4.7965 59.0768,27.3498 126.1533,48.1607 35.0734,10.8817 64.515,20.9369 65.4258,22.3443 0.9105,1.4078 5.0682,3.6262 9.2394,4.9301 15.1337,4.7304 0.7863,-6.3843 -21.5029,-16.658 -20.9746,-9.6678 -26.6198,-14.9013 -22.7783,-21.1171 1.9056,-3.0832 13.9561,1.2227 41.3416,14.7732 7.4877,3.7049 20.4609,8.7394 28.8293,11.1878 8.3685,2.4485 17.9541,5.7475 21.3015,7.3308 6.3064,2.9834 76.9192,24.6895 124.7534,38.3489 32.6375,9.32 49.3515,8.6174 71.7758,-3.0165 8.5446,-4.4335 16.7308,-7.322 18.1912,-6.4194 2.9764,1.8392 46.511,-18.9987 83.4998,-39.9676 13.3895,-7.5903 41.0019,-22.5144 61.3612,-33.1645 20.359,-10.6501 42.2691,-22.7624 48.689,-26.9168 11.9587,-7.7379 20.7546,-11.5834 71.012,-31.0453 15.9001,-6.1571 44.5255,-19.4641 63.6119,-29.571 19.0864,-10.1069 49.2709,-23.4194 67.0761,-29.5838 26.0846,-9.0299 31.5931,-11.9367 28.3556,-14.9612 -6.7894,-6.342 -40.8896,-21.1216 -60.144,-26.0675 -17.0917,-4.3899 -27.5205,-11.7072 -24.2432,-17.0098 1.492,-2.4143 50.4902,12.2593 89.6691,26.8532 25.5191,9.506 30.5228,17.1197 17.8682,27.1889 -3.7752,3.0038 -11.0518,9.4727 -16.1699,14.3751 -5.1181,4.9027 -20.261,14.3268 -33.6505,20.9421 -60.8658,30.0727 -78.777,39.2804 -89.2199,45.8662 -18.4695,11.648 -85.8262,43.1282 -110.1878,51.4981 -31.4102,10.7916 -58.2253,23.256 -72.3701,33.6392 -8.2969,6.0904 -15.8845,11.0738 -16.8607,11.0738 -0.9765,0 -13.8021,7.9685 -28.5016,17.7078 -29.6367,19.6363 -85.8549,49.2395 -93.5088,49.2395 -2.7062,0 -5.7085,2.0541 -6.6716,4.5646 -1.8837,4.9082 -12.2885,5.3951 -33.0529,1.5468 z m 43.4906,-21.5814 c 41.6397,-19.1411 104.7653,-55.6783 110.1841,-63.7747 2.7467,-4.1038 55.7818,-29.7496 80.6412,-38.9947 35.0409,-13.0319 65.2883,-26.9226 103.4642,-47.5144 18.4105,-9.9301 53.868,-28.0823 78.794,-40.3376 24.926,-12.2556 44.6916,-22.9112 43.9236,-23.679 -2.2756,-2.2756 -20.6034,5.2295 -46.6161,19.0891 -42.965,22.8921 -74.7942,37.2581 -104.455,47.1462 -15.9131,5.3047 -41.3768,16.9435 -56.5863,25.8636 -15.2093,8.9205 -38.6086,21.4396 -51.9981,27.8203 -13.3895,6.381 -38.0383,19.5395 -54.7751,29.2411 -16.7369,9.7019 -34.5388,19.9141 -39.5598,22.6943 -11.2524,6.23 -78.8257,33.5713 -82.9707,33.5713 -1.6563,0 -4.7161,2.0541 -6.7997,4.5646 -2.0836,2.5106 -6.8694,4.5646 -10.6352,4.5646 -6.9367,0 -41.428,-10.1881 -91.3074,-26.9706 -57.2976,-19.2788 -147.6087,-40.5677 -99.7282,-23.5092 7.9874,2.8455 28.9009,10.7411 46.4746,17.5451 30.4829,11.8022 139.8814,41.4307 154.5623,41.86 3.8358,0.1126 16.1602,-4.0189 27.3876,-9.18 z m -337.1462,18.4635 c -3.8908,-2.5519 -3.9316,-3.4009 -0.2769,-5.755 5.1857,-3.3392 13.1302,-0.8058 11.626,3.707 -1.5577,4.6733 -6.098,5.4924 -11.35,2.048 z m -60.378,-3.9329 c -4.1361,-4.9836 -1.6566,-8.1897 6.3332,-8.1897 3.7807,0 5.4593,1.7674 4.8184,5.073 -1.31,6.7538 -6.8484,8.3015 -11.1516,3.1167 z m 652.8664,-19.2425 c -4.7919,-4.7919 -1.9479,-10.6455 4.7128,-9.6997 3.7658,0.5349 6.8469,3.0077 6.8469,5.4954 0,4.8349 -8.0145,7.7495 -11.5597,4.2043 z m -532.5586,-9.1517 c -3.1727,-3.1727 0.8457,-7.1831 7.1975,-7.1831 3.2484,0 5.9063,2.0541 5.9063,4.5646 0,4.5135 -9.3419,6.3804 -13.1038,2.6185 z m 562.2516,-4.3424 c -1.1031,-1.7851 -1.2431,-4.0083 -0.3107,-4.9407 2.5032,-2.5033 11.0865,1.4043 11.0865,5.0475 0,4.1303 -8.2075,4.0488 -10.7758,-0.1065 z m -21.9371,-7.8992 c -5.9504,-2.401 -4.4563,-10.1568 1.9566,-10.1568 5.7803,0 10.6228,6.947 7.2167,10.3531 -2.048,2.048 -3.6986,2.0127 -9.1733,-0.1948 z m 36.7386,-8.9423 c -1.028,-2.6795 0,-6.0247 2.2759,-7.4336 4.8056,-2.9701 11.9568,1.8821 11.9568,8.1131 0,5.8411 -11.9495,5.2706 -14.2327,-0.6795 z m -78.411,-19.1984 c -2.5415,-4.1124 1.4199,-12.4468 5.9164,-12.4468 4.4967,0 8.4582,8.3344 5.9166,12.4468 -0.9412,1.5227 -3.6036,2.7686 -5.9166,2.7686 -2.3128,0 -4.9751,-1.2459 -5.9164,-2.7686 z m -539.7995,-50.4467 c -21.5954,-6.7288 -30.5262,-17.4572 -34.1706,-41.0476 -1.3456,-8.7117 -0.6545,-17.7304 1.9178,-25.0207 l 4.0217,-11.399 -24.9404,0.4291 c -39.1931,0.674 -63.0884,-13.091 -62.8693,-36.2161 0.1947,-20.5054 15.6693,-32.9512 50.101,-40.2935 10.0421,-2.1414 21.6818,-4.9292 25.866,-6.1951 l 7.6077,-2.3014 -8.2011,-3.8541 c -17.4103,-8.1825 -10.8309,-22.1739 12.2222,-25.9905 6.1567,-1.0194 14.9298,-3.0354 19.4953,-4.48 4.5659,-1.4445 8.9689,-1.5465 9.785,-0.2252 0.8159,1.3204 -5.9586,4.0662 -15.0546,6.1017 -9.0961,2.0355 -19.6004,6.1804 -23.3428,9.2107 l -6.8043,5.5101 10.5147,2.1992 c 11.9258,2.4944 24.2085,9.4642 24.2085,13.7373 0,5.0147 -12.1807,9.6283 -33.0239,12.5085 -28.9058,3.994 -37.3144,7.6978 -55.3868,24.3944 -15.0747,13.9275 -6.1832,26.8627 22.9465,33.3818 14.0033,3.1338 16.9344,2.8283 28.2509,-2.945 15.4868,-7.9007 22.5841,-8.1144 29.134,-0.8767 6.0788,6.7169 6.329,16.3251 0.8353,32.1061 -10.6157,30.4933 13.6296,56.9217 43.8995,47.8528 15.925,-4.7712 28.4789,-15.9524 36.4888,-32.499 8.5145,-17.5883 18.6747,-24.658 29.7949,-20.7318 6.9072,2.4384 8.1652,4.6927 8.3484,14.9588 0.4826,27.0775 10.0874,33.3127 25.6503,16.6525 4.6905,-5.021 9.9846,-9.1292 11.7648,-9.1292 4.113,0 10.3555,11.4286 8.1721,14.9613 -3.1471,5.0922 9.0467,15.7868 21.1444,18.5441 15.6511,3.5671 33.5461,-1.077 39.569,-10.2694 2.5069,-3.8255 4.7858,-12.7788 5.0645,-19.8959 0.9178,-23.4182 19.0858,-36.8138 49.93,-36.8138 24.8025,0 43.8959,10.0148 43.8959,23.0242 0,8.5778 13.6956,20.3757 31.5827,27.2071 23.9374,9.1416 44.4403,-2.736 44.5404,-25.8031 0.091,-20.666 8.1789,-24.8216 37.4586,-19.2437 33.9877,6.4744 45.3027,0.6305 32.4467,-16.7584 -5.4447,-7.3643 -6.8615,-14.297 -8.0024,-39.1618 -1.2503,-27.2427 -0.7951,-30.749 4.6307,-35.6589 8.1332,-7.3606 17.6832,-3.9436 20.1314,7.2026 2.9992,13.6557 8.4944,16.6041 20.4086,10.9504 15.798,-7.4965 22.5223,-23.0503 9.9654,-23.0503 -5.127,0 -11.7115,-11.1126 -7.9585,-13.432 1.4497,-0.8959 7.2732,-1.4701 12.9412,-1.2757 28.271,0.9704 42.2572,-6.0259 42.2572,-21.1374 0,-15.1535 20.5477,-21.5126 47.0461,-14.5598 24.4488,6.415 34.403,6.003 50.4479,-2.0879 11.3074,-5.7021 13.736,-8.481 14.5227,-16.6191 0.8323,-8.6085 -0.2922,-10.2895 -9.446,-14.1137 -19.9619,-8.3407 -15.9125,-21.3903 13.9674,-45.0087 20.3818,-16.1112 27.6486,-29.9039 25.013,-47.4779 -1.918,-12.7906 -1.674,-13.391 5.0543,-12.4376 5.7127,0.8091 7.5802,3.6416 9.7317,14.7607 2.3751,12.2742 1.7853,15.0662 -5.4626,25.866 -4.4688,6.6588 -17.2776,20.6642 -28.4639,31.1235 l -20.3387,19.0168 11.1112,9.1587 c 13.524,11.1479 17.3108,24.3332 10.134,35.2864 -11.2274,17.1352 -50.1643,24.6044 -77.6712,14.8995 -7.1155,-2.5106 -14.8191,-4.5646 -17.1193,-4.5646 -7.7671,0 -16.3543,11.8128 -16.3543,22.4973 0,11.1209 -6.9087,16.6072 -13.7565,10.924 -2.7561,-2.2871 -6.9869,-1.7071 -14.8298,2.0328 -9.0324,4.3071 -10.9894,6.8825 -11.0627,14.5592 -0.1035,10.7798 -13.7857,27.5903 -26.3423,32.3645 -10.6224,4.0385 -24.5426,0.8006 -28.5217,-6.6339 -1.7437,-3.2582 -4.6185,-5.0289 -6.3886,-3.9349 -3.7692,2.3294 -0.8904,24.8149 3.9191,30.6101 1.7443,2.1019 2.2254,5.3522 1.0694,7.223 -1.1564,1.8709 0.8776,6.574 4.5201,10.4511 4.7028,5.0059 6.339,10.0129 5.6443,17.2725 -0.8326,8.6976 -2.9685,11.1777 -14.3164,16.6245 -13.2541,6.3619 -13.4528,6.3661 -31.6518,0.7021 -24.3296,-7.5724 -28.33,-5.9407 -30.7836,12.555 -3.2019,24.1361 -23.0604,36.5773 -51.5614,32.3034 -19.2614,-2.8885 -48.6498,-22.8254 -55.598,-37.7176 -3.1553,-6.7632 -8.4761,-13.0587 -11.8235,-13.9899 -13.0395,-3.6276 -28.2883,-1.5878 -38.233,5.1136 -8.4019,5.6622 -10.8248,9.865 -13.5955,23.5837 -1.8545,9.1819 -4.9478,19.6105 -6.8743,23.1748 -4.215,7.7997 -24.2642,16.3422 -38.3542,16.3422 -14.4844,0 -35.9495,-8.1658 -41.8807,-15.9323 -4.4323,-5.8031 -6.0165,-6.1598 -13.0764,-2.9433 -4.4182,2.013 -10.6309,3.6602 -13.8064,3.6602 -8.7293,0 -21.0914,-12.2714 -25.5669,-25.3797 l -3.99,-11.6863 -7.9981,13.6478 c -17.6343,30.0911 -45.9156,43.0299 -74.5508,34.1073 z m 332.7014,-57.8992 c -13.5212,-7.0869 -17.0776,-13.2437 -14.8315,-25.6755 2.2247,-12.3116 9.9249,-28.8921 12.3101,-26.5066 0.877,0.8767 0.1156,8.488 -1.6911,16.9136 -3.97,18.5119 -2.5446,23.0138 8.7717,27.7011 17.0834,7.0763 31.2756,-2.4719 36.5879,-24.6157 2.2759,-9.4867 6.4239,-17.2109 11.3044,-21.0498 9.3443,-7.3505 12.3996,-7.5279 19.4683,-1.1305 13.3946,12.1218 20.1664,-7.1195 8.3474,-23.7176 -6.7245,-9.4435 -4.6668,-16.4332 3.8732,-13.1561 5.7916,2.2224 17.3339,29.3358 15.0075,35.2524 -6.6013,16.7864 -22.851,25.3822 -31.5456,16.6875 -7.3134,-7.3134 -10.5126,-5.8335 -14.3246,6.6269 -1.9202,6.2763 -4.9915,14.4835 -6.8256,18.2383 -7.3618,15.072 -31.1375,22.4587 -46.4521,14.432 z m -322.7028,-15.0345 c -5.7593,-5.7593 -7.4695,-10.665 -7.4695,-21.4284 v -13.9588 l -22.3842,2.0285 c -21.1657,1.9178 -22.6565,1.6393 -27.3876,-5.1148 -10.5588,-15.075 -3.3266,-25.9071 21.0854,-31.5818 17.3528,-4.0339 25.6433,-3.4603 25.6433,1.7738 0,1.4945 -4.1081,2.7175 -9.1292,2.7175 -5.021,0 -9.1292,1.3693 -9.1292,3.043 0,1.6737 -2.5263,3.0431 -5.6144,3.0431 -3.0878,0 -7.9153,2.5425 -10.7274,5.6497 -4.2624,4.7098 -4.4262,6.2201 -0.9845,9.0763 3.0629,2.5419 8.4966,2.5099 21.0565,-0.1248 14.5477,-3.0516 17.9937,-2.8525 24.5046,1.4135 6.4151,4.2034 7.5142,7.1488 7.1685,19.2124 -0.5386,18.8064 6.3883,24.2298 17.5515,13.7422 4.1702,-3.9177 7.9978,-10.0342 8.5054,-13.5919 1.261,-8.8407 9.8075,-8.1989 11.0837,0.8323 1.3965,9.8802 -5.1312,21.2114 -15.2275,26.4324 -12.0216,6.2163 -20.0553,5.3259 -28.5454,-3.1645 z m 159.899,-20.0596 c 0,-3.4253 5.0384,-16.4173 11.1963,-28.871 6.1576,-12.4538 10.4794,-23.3595 9.6039,-24.2353 -1.9302,-1.9302 -25.3107,6.056 -30.6643,10.4742 -7.881,6.504 -51.9043,27.3568 -54.4423,25.7882 -6.377,-3.9411 -1.4585,-10.2664 13.7815,-17.7225 26.0121,-12.7267 26.1551,-15.4664 0.8207,-15.726 -34.0504,-0.3484 -68.6059,-4.7943 -72.3522,-9.3084 -5.8241,-7.0176 4.3881,-8.1487 39.9536,-4.4246 27.635,2.8933 40.0288,2.6733 72.1106,-1.2812 21.3069,-2.6264 42.8843,-6.8977 47.9498,-9.4916 21.8933,-11.2112 44.2051,-14.7378 44.2051,-6.9868 0,1.4457 -10.8343,9.8129 -24.0764,18.5943 -21.8836,14.5114 -24.9206,17.7766 -33.3414,35.8451 -5.0956,10.9338 -10.1014,22.9606 -11.1239,26.7264 -2.4171,8.9036 -13.621,9.4128 -13.621,0.6192 z m 115.8603,-4.1644 c -5.1577,-2.8572 -10.1976,-3.2835 -16.7167,-1.4138 -12.5362,3.5954 -13.9379,3.4161 -13.9379,-1.7808 0,-11.3665 29.3939,-14.8377 39.5598,-4.6717 11.2064,11.206 5.7785,16.0007 -8.9052,7.8663 z m 27.1965,-29.1063 c -4.787,-8.9448 -1.1052,-34.6645 5.8652,-40.9727 2.9898,-2.7056 7.6247,-4.0254 10.3987,-2.9609 5.5479,2.1286 6.5216,6.0587 2.1682,8.7491 -1.5598,0.9643 -4.5153,9.6036 -6.5675,19.1987 -4.5287,21.1745 -7.1777,24.7434 -11.8646,15.9858 z m -39.3273,-53.4344 c -9.0595,-4.2174 -23.438,-8.3401 -31.9522,-9.1617 -8.5145,-0.8217 -20.9582,-2.7513 -27.6529,-4.2874 -6.6948,-1.5367 -15.3553,-3.4612 -19.2459,-4.277 -3.8905,-0.8159 -14.8456,0.6314 -24.3445,3.2159 -9.4989,2.5845 -28.2259,4.8795 -41.6154,5.0999 -22.8114,0.3752 -25.734,-0.3421 -46.4131,-11.3914 -12.1379,-6.4857 -25.8317,-11.7283 -30.4306,-11.6507 -14.007,0.2373 -32.0191,-5.6273 -45.792,-14.9077 -7.1972,-4.8494 -13.6643,-8.8173 -14.3715,-8.8173 -0.7072,0 -9.1971,-3.5269 -18.8664,-7.8377 -9.6696,-4.3108 -21.6891,-9.5354 -26.7102,-11.6102 -27.474,-11.3521 -33.1879,-15.6705 -40.7043,-30.7626 -5.609,-11.2627 -7.9214,-21.6292 -8.9016,-39.904 l -1.324,-24.6884 11.0104,-8.7853 c 9.9283,-7.9217 11.0104,-10.2341 11.0104,-23.5305 0,-15.7104 4.3616,-23.9577 23.9857,-45.355 9.9636,-10.864 21.6603,-15.2241 21.6603,-8.0748 0,1.8353 -5.6288,9.7092 -12.5086,17.4976 -15.582,17.6404 -18.6028,25.3813 -17.3737,44.5188 0.9397,14.6293 0.6129,15.3225 -9.4932,20.1329 -5.7565,2.74 -11.4644,7.5639 -12.6844,10.7192 -3.3613,8.6935 0.4909,37.8308 6.6187,50.0654 8.5309,17.0324 19.5751,23.2128 19.5751,10.9544 0,-6.4561 9.1103,-3.6833 10.0713,3.0653 0.9601,6.7407 9.2747,13.7501 20.5319,17.3087 5.4017,1.7074 6.6515,0.2069 9.1292,-10.9663 1.8912,-8.5291 4.7058,-13.2863 8.25,-13.9458 4.7856,-0.8904 5.1678,0.8 3.4624,15.31 l -1.9171,16.3108 18.5998,11.0399 c 18.4276,10.9374 18.5998,10.9733 18.5998,3.8821 0,-13.7519 9.7637,-12.0077 13.2833,2.3732 1.7108,6.9903 3.6751,8.3685 11.9276,8.3685 5.4337,0 14.6508,2.7716 20.4825,6.1588 33.5133,19.4665 42.2393,22.1277 66.5415,20.2939 12.7498,-0.9622 30.1628,-4.4842 38.6956,-7.8271 l 15.5144,-6.0776 24.0454,7.4854 c 13.2252,4.1169 30.2079,7.6025 37.7395,7.7458 7.6408,0.146 17.888,2.8063 23.1823,6.0204 5.2186,3.1681 14.1195,5.6522 19.7799,5.5198 5.6601,-0.1309 8.551,-0.9403 6.4236,-1.7963 -11.8935,-4.7852 -17.5858,-40.9624 -9.0208,-57.3316 11.8348,-22.6185 48.3144,-44.1445 93.0255,-54.8933 12.2751,-2.9511 23.9148,-6.9534 25.866,-8.8942 5.8698,-5.8387 43.3457,-25.9543 48.354,-25.9543 2.5638,0 6.6354,-2.9725 9.0477,-6.6056 2.5613,-3.8574 5.8807,-5.6817 7.9786,-4.385 4.3701,2.7007 4.7849,10.9906 0.5498,10.9906 -1.6736,0 -3.043,1.7975 -3.043,3.9943 0,2.1968 -6.9431,7.0261 -15.429,10.7314 -8.4861,3.7055 -17.9826,9.0972 -21.1033,11.9817 -6.2888,5.8132 -29.2189,14.8581 -63.8888,25.2015 -39.9694,11.9248 -59.1258,25.5045 -69.2197,49.0688 -3.6954,8.6267 -1.9521,28.8196 3.0352,35.1607 1.6286,2.0705 2.1664,5.8363 1.1947,8.3685 -2.5598,6.6703 3.3209,5.8679 36.5375,-4.9858 25.3395,-8.2799 31.9612,-11.9592 48.5043,-26.9512 13.4774,-12.2139 24.8502,-19.4001 38.3523,-24.2346 27.7984,-9.953 114.994,-53.4868 125.701,-62.7581 5.0211,-4.3476 14.6067,-10.71 21.3015,-14.1386 24.58,-12.588 58.0899,-33.803 67.975,-43.0347 5.5861,-5.2168 12.7626,-14.541 15.9478,-20.7206 3.1855,-6.1792 10.9392,-15.0649 17.231,-19.7461 17.0129,-12.6579 22.0902,-19.2328 22.0902,-28.6066 0,-22.4904 -28.1252,-23.4827 -58.495,-2.0638 -4.0728,2.8726 -6.0547,2.8836 -8.8884,0.052 -5.466,-5.4659 14.8757,-23.2654 32.1,-28.0878 7.6901,-2.1532 13.982,-4.8631 13.982,-6.0219 0,-3.7165 -29.6888,-29.93 -36.2602,-32.0157 -3.7208,-1.1811 -6.3427,-4.6015 -6.3427,-8.2747 0,-5.3622 1.3383,-5.994 9.316,-4.3982 9.719,1.9436 42.4161,22.1115 42.4161,26.1625 0,1.2808 4.2834,7.6523 9.5184,14.1587 12.6372,15.7065 17.6936,28.2616 18.3478,45.5583 0.4769,12.6105 -0.5045,15.0401 -8.3374,20.6381 -12.9455,9.2524 -23.0761,20.4993 -31.7011,35.1948 -7.8675,13.4053 -39.7713,36.9075 -71.9882,53.0312 -8.6301,4.3193 -16.1617,9.0065 -16.7369,10.4158 -1.1003,2.6977 -63.9308,38.0145 -88.4189,49.7002 -7.8873,3.7637 -15.1152,8.8623 -16.0622,11.3299 -2.4844,6.4739 9.495,17.8729 23.7907,22.6383 6.7747,2.258 12.8597,5.7319 13.5221,7.7193 2.0483,6.1455 -15.5491,4.11 -30.6756,-3.5479 l -14.146,-7.1618 -1.932,6.4011 c -3.9146,12.9692 -14.0687,26.7397 -17.3199,23.4882 -2.1554,-2.1551 -0.037,-9.439 6.7669,-23.2579 5.448,-11.0658 9.3123,-20.7126 8.5878,-21.4371 -1.9293,-1.929 -33.7558,9.4526 -43.8569,15.6839 -4.7682,2.9417 -14.8319,11.7916 -22.3635,19.6661 -12.6908,13.2693 -16.8561,15.3489 -56.8682,28.393 -23.7462,7.7413 -47.0256,14.0617 -51.732,14.0453 -4.7067,-0.03 -15.97,-3.4801 -25.0292,-7.6972 z m 313.916,-68.821 c -5.9733,-5.9735 -4.4456,-8.9387 3.5689,-6.9272 8.8882,2.2309 13.9436,-5.2846 13.9436,-20.7287 0,-12.6437 5.1382,-20.024 18.3472,-26.3539 5.5765,-2.6721 12.3996,-8.9667 15.1627,-13.9877 5.8625,-10.6535 13.2538,-11.9626 14.5906,-2.5842 1.1673,8.1901 -14.9202,27.1003 -25.2638,29.6963 -5.0689,1.2723 -8.0635,4.6088 -9.1663,10.2116 -5.0235,25.5283 -8.8937,32.6457 -18.2499,33.5647 -5.0293,0.4939 -10.8491,-0.807 -12.933,-2.8909 z m -524.3642,-7.3913 c -5.7487,-6.9266 0.1065,-14.7375 11.93,-15.914 11.7858,-1.1725 12.4394,3.6946 1.8185,13.5377 -9.2159,8.541 -8.7056,8.4527 -13.7485,2.3763 z m -108.8644,-61.1722 c -1.8,-3.2163 -1.7988,-7.4838 0,-11.438 3.446,-7.5629 24.6415,-16.9051 38.3539,-16.9051 7.7704,0 9.858,-1.2663 9.858,-5.979 0,-6.8332 8.4901,-12.3269 18.8192,-12.1775 6.4473,0.094 6.0761,0.8953 -4.3647,9.4244 -6.2763,5.1273 -11.4115,11.2435 -11.4115,13.5918 0,2.3481 -2.7536,4.2695 -6.1193,4.2695 -11.1348,0 -33.4405,12.4023 -33.4405,18.5934 0,7.1366 -7.8191,7.5513 -11.6978,0.6205 z m 80.6071,-7.8025 c -1.1637,-4.4492 0.1552,-8.7923 3.7633,-12.402 6.8968,-6.8977 29.0379,-10.3951 32.3085,-5.1032 2.8149,4.5546 -3.578,9.0267 -12.9935,9.0903 -4.3927,0.03 -8.1755,2.8194 -10.3784,7.6542 -4.3093,9.4575 -10.3306,9.8184 -12.6999,0.7607 z m 472.5277,-26.768 c -3.19,-1.9713 -3.1087,-3.4462 0.4239,-7.7059 9.1502,-11.0329 39.3642,-18.2386 39.3642,-9.3879 0,5.3987 -34.6346,20.2787 -39.7881,17.0938 z m -513.9119,-17.86 c -5.6671,-10.5896 13.0508,-20.6837 20.8742,-11.2572 2.7914,3.3635 1.3378,5.49 -7.1956,10.5247 -10.2743,6.0618 -10.8108,6.0907 -13.6786,0.7325 z m 563.3091,-7.2866 c -6.0092,-7.2404 49.2094,-56.8749 63.2735,-56.8749 6.0164,0 3.2004,11.9547 -3.6529,15.5066 -3.7658,1.9515 -16.6288,12.9546 -28.5847,24.4516 -11.9559,11.4967 -23.0856,20.9031 -24.7325,20.9031 -1.6472,0 -4.4837,-1.7939 -6.3034,-3.9864 z m -368.6906,-12.7215 c -83.1331,-17.41 -147.0161,-36.8686 -216.0575,-65.8099 -59.5189,-24.9498 -69.9101,-30.8217 -87.0188,-49.1726 l -16.4453,-17.6388 v -34.6535 c 0,-19.0596 1.6119,-41.6364 3.582,-50.1713 3.0881,-13.3788 5.4751,-16.7715 17.3175,-24.6156 17.7188,-11.7365 30.4616,-15.013 57.4052,-14.7607 26.7382,0.2495 32.9238,-1.6554 91.3166,-28.135 25.5075,-11.5669 57.0032,-24.9543 69.9904,-29.7495 31.8578,-11.763 114.6282,-50.1546 123.9653,-57.4993 8.3069,-6.5341 28.4989,-14.8061 61.0046,-24.9909 l 21.3754,-6.6975 31.8782,6.322 c 17.5329,3.4773 56.5267,10.5281 86.653,15.6687 30.1264,5.1407 61.6221,11.4121 69.9905,13.9363 8.3684,2.5246 39.7683,7.9598 69.7771,12.0789 65.2883,8.9615 72.48,10.7618 98.6333,24.692 31.8603,16.9699 31.0663,14.9159 30.1741,78.0409 -0.646,45.7135 -1.5486,54.9306 -5.7514,58.7341 -6.7032,6.0664 -47.2755,27.041 -76.5163,39.5565 -35.12,15.0321 -103.6537,47.7852 -107.4086,51.3319 -1.7954,1.6959 -23.7054,13.262 -48.689,25.703 -57.5257,28.6452 -55.2252,27.5908 -60.21,27.5908 -2.5787,0 -4.9861,4.8108 -6.1969,12.3819 -2.6119,16.3331 -12.2143,24.7042 -34.1855,29.801 -42.0229,9.7485 -144.0269,14.4558 -174.5839,8.0566 z m 103.4642,-13.7337 c 52.0683,-5.3107 50.5075,-4.7645 50.4144,-17.6498 -0.046,-6.1865 1.0572,-21.1763 2.4485,-33.3105 2.9709,-25.9059 -2.2455,-31.2176 -6.224,-6.3378 -3.3599,21.0111 -10.1222,23.3816 -10.1222,3.5482 v -14.7081 l -47.9282,-0.2373 c -46.9441,-0.2343 -113.0653,-8.6591 -134.2557,-17.1066 -4.4042,-1.7558 -10.7463,-4.302 -14.0936,-5.6583 -21.589,-8.7482 -124.8216,-41.3062 -163.1091,-51.4423 -12.3847,-3.2789 -25.5989,-6.8585 -29.3647,-7.9546 -5.6178,-1.6357 -6.8469,-0.8012 -6.8469,4.6477 0,9.0315 -5.6878,19.0185 -9.4925,16.6671 -1.7056,-1.0541 -2.7156,-8.1849 -2.2446,-15.8461 0.546,-8.8769 -0.4814,-14.3755 -2.8321,-15.159 -2.555,-0.8518 -3.7996,3.7597 -4.0491,15.0001 -0.4711,21.2406 -3.2981,33.6843 -8.0085,35.2512 -2.7366,0.9105 -3.8038,-3.4505 -3.8038,-15.5455 0,-18.7684 -4.5874,-25.5563 -6.9601,-10.2986 -0.8438,5.426 -2.4768,12.7753 -3.6286,16.3315 -1.6955,5.2356 0.2922,8.1313 10.4499,15.2153 6.899,4.8123 15.3581,11.0749 18.7976,13.9171 3.4396,2.8426 16.054,8.8517 28.0321,13.3542 11.9778,4.5025 29.9943,11.6072 40.0364,15.7886 22.6967,9.45 72.983,27.8794 85.2058,31.2264 116.8798,32.0073 152.4057,36.9559 217.579,30.3086 z m 77.2265,-13.7236 c 10.3635,-4.3303 16.5741,-15.5923 6.4577,-11.7103 -3.3854,1.2991 -4.5999,-0.4945 -4.7018,-6.9425 l -0.1369,-8.694 -3.8495,9.0257 c -5.9748,14.0094 -8.3106,2.7641 -4.368,-21.0291 3.0208,-18.2309 2.1243,-26.7676 -2.3423,-22.301 -1.5641,1.5641 -4.669,20.3949 -8.792,53.3236 -1.8459,14.7448 0.14,15.6778 17.7331,8.3276 z m 46.3958,-42.1616 c 17.5597,-6.2 70.3365,-31.5971 71.5774,-34.4445 1.5876,-3.6419 97.3029,-50.2288 131.9296,-64.2132 17.3728,-7.0161 54.13,-28.427 58.3325,-33.9782 3.9617,-5.2335 8.7019,-28.3054 11.7784,-57.3322 l 2.0307,-19.1561 -8.6834,2.1286 c -4.7755,1.171 -24.4309,9.5701 -43.6783,18.6652 -19.2474,9.0952 -48.689,22.7622 -65.4259,30.3713 -133.9094,60.8796 -164.1337,74.8302 -166.2182,76.7214 -2.0038,1.8183 -6.4598,85.4018 -4.5527,85.4018 0.6138,0 6.423,-1.8739 12.9099,-4.1641 z m -87.6043,-34.4089 c 1.1113,-1.6989 6.8131,-3.865 12.671,-4.8138 18.9771,-3.0735 27.2683,-7.8882 32.5087,-18.8779 4.372,-9.1679 4.512,-11.7493 0.9936,-18.3232 -4.1243,-7.7063 -2.9874,-11.3847 3.8635,-12.4988 4.8506,-0.7888 29.7827,-10.781 50.883,-20.3928 9.2053,-4.1933 25.6378,-11.2904 36.5168,-15.7713 10.8789,-4.4809 29.3656,-12.9741 41.0813,-18.8734 11.7158,-5.8995 27.7157,-13.272 35.5552,-16.3832 24.9291,-9.8939 126.599,-60.7943 130.2717,-65.2195 1.9418,-2.3399 3.0829,-7.4105 2.5361,-11.2685 -1.9807,-13.9722 -26.4278,-20.9509 -125.7601,-35.8984 -24.685,-3.7147 -46.6961,-7.926 -85.2057,-16.3023 -11.7158,-2.5483 -37.734,-7.5681 -57.8182,-11.1553 -20.0843,-3.5871 -46.4722,-8.4433 -58.6399,-10.7916 -35.6294,-6.8758 -53.3805,-1.7239 -149.81,43.4793 -17.5737,8.2382 -42.2225,19.2824 -54.7751,24.5426 -12.5526,5.2606 -42.679,17.9863 -66.9474,28.2798 -85.2715,36.168 -92.9236,39.1365 -105.975,41.1115 -7.653,1.1582 -14.4548,0.699 -16.2509,-1.0973 -3.8217,-3.8215 -35.8673,3.1425 -46.491,10.1035 -10.0518,6.5861 -11.6108,12.4739 -6.2745,23.6948 5.0531,10.6252 23.8665,23.61 42.6181,29.4146 6.6948,2.0723 14.4001,4.8756 17.1231,6.2292 2.7229,1.3538 10.2545,3.3628 16.7368,4.4647 14.4911,2.4634 56.2343,14.6536 84.8196,24.7697 51.1536,18.1031 96.5385,30.9102 121.8464,34.3835 14.995,2.0577 30.0025,4.9392 33.3498,6.4029 9.862,4.3124 24.9538,5.3303 67.9702,4.5841 23.2886,-0.4041 41.4438,-2.0203 42.6029,-3.7929 z m -203.3564,-45.0753 c -3.0519,-3.677 -2.7975,-4.8972 1.3533,-6.4903 5.9957,-2.3005 12.3886,2.9259 9.4314,7.7108 -2.8082,4.5436 -6.3321,4.1447 -10.7847,-1.2205 z m 149.08,-2.5717 c 0,-2.2318 0.8648,-4.9222 1.9217,-5.9793 2.8678,-2.8675 13.7507,3.7922 11.6778,7.1463 -2.7117,4.3878 -13.5995,3.4536 -13.5995,-1.167 z m -226.2009,-13.1868 c -4.6197,-4.6197 -1.5815,-10.1435 5.5788,-10.1435 5.5792,0 7.6077,1.6229 7.6077,6.0861 0,5.9374 -8.6463,8.5979 -13.1865,4.0574 z m -43.2739,-19.5377 c -2.8757,-4.6532 3.3653,-10.0385 9.0884,-7.8423 2.6231,1.0066 4.7691,3.9271 4.7691,6.4902 0,5.3184 -10.7575,6.368 -13.8575,1.3521 z m -48.5849,-12.004 c -1.182,-1.9123 -0.717,-4.9085 1.0334,-6.6585 4.0896,-4.0896 13.6241,-0.5225 11.9601,4.4745 -1.6937,5.0871 -10.3047,6.5344 -12.9935,2.184 z m 167.2178,-3.2865 c -2.9688,-4.8041 5.2682,-9.1249 9.9648,-5.2271 2.1299,1.7677 3.1219,4.428 2.2047,5.9121 -2.3349,3.7783 -9.666,3.3653 -12.1695,-0.685 z m -138.5062,-7.5772 c -2.7038,-3.2579 -2.8225,-5.4356 -0.427,-7.8311 4.2019,-4.2018 12.8564,-1.0538 12.8564,4.6766 0,6.3412 -8.0821,8.3922 -12.4294,3.1545 z m 85.493,-5.7405 c -3.044,-3.6675 -2.8255,-4.8865 1.1488,-6.4117 2.6991,-1.0356 7.1155,-1.0356 9.8147,0 3.974,1.5252 4.1925,2.7442 1.1488,6.4117 -2.0672,2.4908 -4.7925,4.5287 -6.0563,4.5287 -1.2638,0 -3.9892,-2.0379 -6.056,-4.5287 z m -139.9228,-1.4387 c -2.4621,-1.5569 -3.5482,-3.7591 -2.4134,-4.8939 2.7847,-2.7847 11.4544,0.7574 11.4544,4.6796 0,3.865 -3.1505,3.9399 -9.041,0.2131 z m 454.7246,-3.3641 c -2.8005,-4.5318 0.4465,-6.9954 6.273,-4.7597 2.6889,1.0316 4.0363,3.2549 2.9947,4.9404 -2.4667,3.9913 -6.7407,3.9076 -9.2677,-0.1795 z m -371.1882,-2.9375 c -1.182,-1.9123 -0.717,-4.9085 1.0334,-6.6585 4.0896,-4.0896 13.6241,-0.5225 11.9601,4.4745 -1.6937,5.0871 -10.3047,6.5344 -12.9935,2.184 z m -25.1978,-6.598 c -2.0084,-2.0084 -3.6517,-5.4318 -3.6517,-7.6076 0,-5.5859 8.9451,-4.9337 11.1504,0.8131 2.5151,6.5541 -2.8644,11.4285 -7.4987,6.7945 z m 51.3389,-20.5598 c -4.3172,-2.6682 -2.4692,-12.3053 2.3596,-12.3053 1.5212,0 4.3199,1.8724 6.2191,4.1608 4.4639,5.3786 -2.4436,11.9361 -8.5787,8.1445 z m 140.4465,-18.9276 c -2.5212,-2.5211 -2.6353,-4.7167 -0.3862,-7.4269 4.3227,-5.2082 11.8774,-1.8718 11.8774,5.2457 0,6.4637 -6.0584,7.614 -11.4912,2.1812 z m -102.6237,-5.5499 c -3.4721,-5.6181 1.4899,-9.3605 7.8776,-5.9416 3.2929,1.7619 5.183,4.5047 4.2003,6.0944 -2.3465,3.7965 -9.6942,3.7037 -12.0779,-0.1522 z m 507.7202,-4.6958 c -0.9911,-2.5829 -1.0072,-5.4909 -0.037,-6.4622 3.0708,-3.0705 11.158,1.639 11.158,6.4978 0,6.0743 -8.7884,6.046 -11.1221,-0.037 z m 16.2993,-27.6584 c -4.7919,-4.7919 -1.9479,-10.6455 4.7128,-9.6997 3.7658,0.5349 6.8469,3.0077 6.8469,5.4954 0,4.8346 -8.0146,7.7495 -11.5597,4.2043 z m 41.6056,-2.5467 c -0.9217,-2.4022 -0.8261,-5.7426 0.2131,-7.4236 2.4874,-4.0247 10.8226,-0.7236 10.8226,4.2862 0,5.7173 -9.0574,8.2923 -11.0353,3.1374 z m -265.3961,-2.3459 c -5.249,-5.249 -4.2905,-8.3992 2.5558,-8.3992 3.3474,0 6.0861,1.9732 6.0861,4.3851 0,6.1433 -4.4471,8.209 -8.6419,4.0141 z m -83.7944,-37.4236 c -1.0408,-2.7117 0.1886,-5.441 2.9219,-6.4902 5.6826,-2.1804 11.9005,3.229 9.0373,7.862 -2.9862,4.8315 -9.8824,4.0406 -11.9592,-1.3718 z m -406.6726,172.8092 c -0.033,-16.3504 -0.9512,-22.1836 -2.9965,-19.0192 -4.8637,7.5261 -3.3428,42.6029 1.8472,42.6029 0.6579,0 1.1749,-10.6127 1.1493,-23.5837 z m 88.342,150.6316 c 0.03,-2.0921 1.0529,-5.2012 2.2823,-6.909 3.271,-4.5423 16.843,-9.8756 21.2548,-8.352 7.2818,2.5145 3.7284,8.7978 -7.8693,13.9145 -13.957,6.1579 -15.7284,6.3101 -15.6678,1.3465 z m 642.0398,-107.268 c 0,-2.5358 2.7049,-4.5646 6.0861,-4.5646 3.3811,0 6.0861,2.0288 6.0861,4.5646 0,2.5358 -2.705,4.5646 -6.0861,4.5646 -3.3812,0 -6.0861,-2.0288 -6.0861,-4.5646 z"
                                  fill="#00B894"
                                  transform="translate(156.84187,213.51674) matrix(0.26458333,0,0,0.26458333,508.95285,-1943.665)"/>
                        </svg>
                    </a>
                </div>

                <div class="score_text d-flex align-items-center">
                    <!-- Affichage du Score -->
                    <div class="flex-column text-center fw-bold">
                    <?php $score= ($_SESSION['score']/6); $scorePourcentage = sprintf("%d%%", $score * 100); echo $scorePourcentage; ?>

                        <!-- <a href="/?jeu">
                             <button class="restart">Recommencer</button>
                         </a>-->
                        <input type="hidden" name="scoreSave" value="1">
                        <button type="submit"  class="btn btn-warning fw-bold">
                            Enregistrez bien votre score !
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<section id="container_questions<?= $i; ?>" class="d-none">
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
