<?php


use WINSTON\Utils\Php\Outils;

$uriSegments = Outils::getUriSegments();
$activeLogin = $activeRegister = '';
$activeHome = ' text-secondary';
switch ($uriSegments[1]) {
    case 'login':
        $activeLogin = ' active';
        break;
    case 'register':
        $activeRegister = ' active';
        break;
    default:
        $activeHome = '';
        break;

}
?>


<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/">
                <!-- Affichage du logo -->
                <svg height="15mm" viewBox="0 0 266.44794 196.42493" width="15mm">
                    <path color="#000"
                          d="m -1255.6535,7203.1746 c 0,0 113.2212,-65.3311 148.6214,-86.0328 35.4003,-20.7016 169.0849,-79.177 169.0849,-79.177 l 438.6948,98.9377 c 0,0 4.1821,20.5672 3.286,41.8065 -0.8962,21.2393 6.8709,29.4394 6.8709,29.4394 0,0 57.5069,7.7966 55.4157,24.5999 -2.0911,16.8033 -30.023,25.1377 -30.023,25.1377 0,0 36.8939,11.4263 30.3217,30.6492 -6.5722,19.223 -4.1822,33.3377 -18.8203,38.3114 -14.6382,4.9738 -36.3786,11.7868 -36.3786,11.7868 0,0 16.2139,24.105 18.1556,33.3805 1.9418,9.2754 -3.1366,24.0623 -18.3722,25.8098 -15.2357,1.7475 -35.8485,23.1213 -35.8485,23.1213 0,0 -120.2414,96.249 -180.2875,116.8163 -60.0461,20.5672 -109.9351,44.7644 -109.9351,44.7644 0,0 -35.251,38.983 -85.4387,44.226 -50.1877,5.242 -292.6124,-50.545 -322.6355,-59.954 -30.023,-9.4102 -138.1657,-37.3708 -145.7835,-80.3872 -7.6177,-43.0164 4.3317,-46.5114 4.3317,-46.5114 0,0 -55.8637,7.5279 -60.6435,-2.4197 -4.7798,-9.9476 31.7426,-33.6928 31.7426,-33.6928 l 5.4501,-40.6449 c 0,0 -24.0483,-9.5443 -16.7292,-25.0033 7.319,-15.459 24.6932,-26.1003 24.6932,-26.1003 l 18.6235,-90.0438 c 0,0 27.1851,-31.0525 105.6035,-18.8197 z"
                          fill="#FFFFFF" overflow="visible" paint-order="fill markers stroke"
                          transform="translate(-123.02652,10.355116) matrix(0.26458333,0,0,0.26458333,502.47607,-1833.0334)"/>
                    <path d="m -935.49372,7629.8816 c -15.9,-1.2595 -41.2335,-4.3646 -56.2967,-6.8998 -15.06318,-2.5355 -39.02728,-6.2994 -53.25358,-8.3642 -33.1374,-5.9027 -65.5747,-16.806 -97.378,-22.6884 -60.5174,-10.9946 -187.6785,-52.7321 -209.4595,-68.7501 -10.0863,-7.4175 -12.8022,-11.7037 -15.558,-24.5533 -1.8362,-8.5617 -2.6904,-16.2147 -1.8986,-17.0065 0.7918,-0.7921 -0.5493,-3.4286 -2.9801,-5.8597 -5.2301,-5.2301 -5.7428,-17.1276 -1.1116,-25.7814 3.2448,-6.063 2.8051,-6.1397 -22.9359,-3.9953 -22.8138,1.9004 -27.0248,1.4796 -32.2172,-3.2195 -12.0907,-10.942 -4.3646,-22.5762 22.3224,-33.614 l 12.9659,-5.3628 -0.4327,-19.3791 c -0.3399,-15.219 -1.8295,-20.8657 -6.937,-26.3028 -11.2045,-11.9263 -8.7412,-24.915 7.8073,-41.1659 7.8715,-7.7297 14.076,-14.9539 13.7881,-16.0537 -0.8155,-3.1149 5.1315,-70.2235 6.8877,-77.7235 3.9529,-16.8798 58.84,-34.1316 94.8562,-29.8147 16.8154,2.0154 27.9621,-2.0227 54.2618,-19.6579 21.2817,-14.2704 141.3701,-79.0346 168.1292,-91.4958 16.1699,-7.53 27.4313,-14.8084 41.033,-21.4304 64.99038,-31.7927 89.42678,-35.1517 138.98918,-19.1053 7.3779,2.3888 14.4825,3.2588 15.788,1.9336 2.733,-2.7744 20.9509,-72.8141 20.9853,-80.6795 -13.066,-16.1426 -21.00102,-27.2206 -15.3197,-43.0673 11.46526,-31.9797 42.20894,-38.0383 64.9465,-23.5151 22.41439,14.3168 21.0958,46.0164 -2.4943,59.8414 -6.9571,4.0768 -16.2022,7.4126 -20.545,7.4126 -8.4238,0 -9.404,1.6919 -14.1028,24.3445 -1.5623,7.5315 -5.5815,24.643 -8.9323,38.0252 -3.3504,13.3821 -5.8575,24.4912 -5.5715,24.6865 1.0106,0.6896 67.6138,15.8988 78.1185,17.8388 5.8579,1.0815 13.3895,3.1882 16.7368,4.6811 3.3474,1.4932 48.9602,11.0658 101.36143,21.2725 87.6089,17.0649 144.9938,31.8758 154.6944,39.9269 2.8426,2.3589 3.4095,9.851 2.1232,28.0543 -0.9656,13.6594 -1.9369,28.1273 -2.1585,32.1508 -0.3596,6.5289 1.5535,7.7653 17.7968,11.5004 21.4286,4.9276 37.5207,14.8766 40.0844,24.7824 2.0943,8.0912 -4.1547,21.8276 -9.9298,21.8276 -8.4046,0 -7.0602,6.4592 3.2238,15.4886 10.606,9.312 14.3097,21.5458 7.7504,25.5997 -1.6801,1.0383 -2.1971,5.3029 -1.1494,9.4773 3.4901,13.9062 -16.1343,29.2545 -42.4516,33.2008 l -14.6228,2.1928 7.4686,7.9917 c 15.791,16.8969 21.7612,38.9752 13.4886,49.8819 -2.0921,2.7582 -10.6236,6.1284 -18.9592,7.489 -10.9431,1.7862 -16.0618,4.2913 -18.4151,9.0117 -8.2351,16.518 -49.5553,48.5785 -92.4841,71.7588 -9.3331,5.0396 -19.0234,10.7931 -21.534,12.786 -20.4311,16.2177 -94.09573,51.044 -144.54553,68.3369 -29.7395,10.1939 -51.3663,22.3138 -60.9738,34.1702 -5.0825,6.2724 -16.3187,14.4604 -25.7535,18.7666 -28.25167,14.8596 -58.60198,13.1673 -85.2057,11.0554 z m 74.643,-27.2978 c 33.0458,-16.0686 50.8809,-39.1721 45.8166,-59.3506 -1.5647,-6.2335 -3.7478,-7.5541 -12.4887,-7.5541 -7.3137,0 -10.5929,1.3912 -10.5929,4.4946 0,2.4718 -3.3863,6.7133 -7.5252,9.4249 -4.5135,2.9576 -8.3054,9.0887 -9.4743,15.3191 -1.0717,5.7137 -3.316,11.2335 -4.9869,12.2663 -3.9621,2.4484 -8.3386,-4.6288 -8.3977,-13.5797 -0.033,-5.0773 -1.5474,-6.7851 -5.3719,-6.0593 -4.1507,0.7875 -5.661,5.032 -6.8469,19.2422 -1.1265,13.5008 -2.7059,18.2316 -6.0861,18.2316 -3.4104,0 -4.7925,-4.3346 -5.4666,-17.1455 -0.8657,-16.4505 -1.282,-17.2214 -10.2703,-19.0192 -17.0323,-3.4064 -20.7799,-2.4259 -20.7799,5.4364 0,8.8118 -9.8933,12.9696 -37.5763,15.7914 -25.9975,2.6499 -43.36428,-2.5939 -57.39738,-17.3315 -12.9443,-13.5936 -17.4227,-14.3547 -31.8815,-5.4187 -14.7242,9.1002 -38.3137,8.8623 -48.2652,-0.4866 -4.0536,-3.8084 -8.2281,-11.4979 -9.2767,-17.088 -1.049,-5.5901 -2.4591,-10.1642 -3.1338,-10.1642 -0.6749,0 -15.7494,3.6928 -33.4989,8.2063 -31.1126,7.9113 -32.4193,8.005 -36.3631,2.6115 -2.2501,-3.0771 -4.602,-7.1122 -5.2268,-8.967 -0.7017,-2.0833 -8.886,-3.1906 -21.411,-2.897 -18.0806,0.4239 -20.2756,-0.1521 -20.2756,-5.3253 0,-4.1782 -2.1551,-5.8007 -7.7053,-5.8007 -10.6693,0 -28.5245,-7.884 -30.7012,-13.5563 -1.2775,-3.3291 -6.0323,-4.7021 -16.2837,-4.7021 -17.1462,0 -30.5156,-8.6837 -30.5156,-19.821 0,-3.9642 -1.2738,-7.9947 -2.8309,-8.957 -4.7743,-2.9505 -42.815,10.9663 -42.815,15.6636 0,6.4969 7.6901,19.919 15.687,27.38 10.1857,9.5028 84.3783,35.8272 151.6815,53.8184 25.9503,6.9366 47.8856,11.4638 157.3209,32.467 44.7707,8.4516 80.8918,13.9649 113.16748,14.5224 31.13152,2.4398 33.47766,1.1336 59.7719,-11.6519 z m 17.0451,-36.9799 c -2.6374,-7.0961 -1.4826,-14.7509 2.2117,-14.663 5.6138,0.1339 9.9782,6.0192 9.0698,12.2316 -1.4086,9.6371 -8.0699,11.0725 -11.2815,2.4314 z m -98.7328,0.2922 c 8.3255,-3.1654 8.9289,-7.8755 1.9917,-15.5413 -7.4866,-8.2725 -3.1934,-9.8634 16.1389,-5.9811 29.9291,6.0106 67.2903,2.9372 72.8074,-5.9894 1.0726,-1.7354 -1.1707,-6.4777 -4.9852,-10.5381 -5.9723,-6.357 -9.714,-7.3852 -26.9457,-7.4035 -11.0055,0 -31.531,-2.7831 -45.6119,-6.1588 l -25.6019,-6.1373 -25.8709,6.4811 c -19.97488,5.0044 -30.43788,6.0217 -45.91008,4.4633 -31.4899,-3.1712 -37.2976,-2.8112 -53.5353,3.3166 -14.2897,5.3927 -15.1411,6.3089 -13.6832,14.7257 0.9473,5.469 4.6468,10.711 9.4697,13.4181 7.1485,4.0123 9.0629,3.8486 19.7693,-1.691 7.265,-3.7591 12.2304,-8.6758 12.8265,-12.7005 1.1308,-7.6375 11.9352,-9.1128 14.6639,-2.0021 2.1998,5.7328 7.1865,5.979 7.1865,0.3548 0,-2.3151 2.7388,-4.9258 6.0861,-5.8013 4.8902,-1.2786 6.0862,-0.094 6.0862,6.0323 0,5.8756 8.0285,28.1246 10.2368,28.369 0.2283,0.03 5.8914,2.079 12.58608,4.564 12.4562,4.6233 37.7133,3.7633 52.2951,-1.7805 z m 212.4514,-26.2623 c 59.5957,-26.5364 84.41343,-40.2999 149.11013,-82.694 18.336,-12.0149 52.1454,-42.3692 49.5588,-44.4942 -0.4784,-0.3928 -5.8065,-3.0141 -11.8406,-5.8253 -12.6229,-5.8807 -20.9268,-18.2797 -15.7256,-23.4809 2.3805,-2.3803 4.735,-1.1274 8.404,4.4724 6.4988,9.918 25.3618,16.8117 29.3446,10.7244 1.4965,-2.2875 1.9308,-6.898 0.9649,-10.2454 -3.5497,-12.304 -2.8334,-15.2202 3.9779,-16.1885 5.0177,-0.7136 8.2939,1.5255 12.1723,8.3191 6.5693,11.5077 10.7967,13.2684 20.855,8.6855 6.7708,-3.085 7.6393,-4.9967 6.2261,-13.7059 -0.9458,-5.8272 -6.9148,-16.1106 -14.0711,-24.2405 -11.4331,-12.9887 -14.4975,-20.348 -7.9677,-19.1347 1.4449,0.2678 3.7561,-1.3405 5.1364,-3.5756 1.5017,-2.4317 8.6018,-4.1876 17.682,-4.3723 24.0442,-0.4893 42.9955,-17.5281 19.8341,-17.8327 -6.748,-0.088 -8.9147,-1.5492 -8.9147,-6.0097 0,-4.1888 3.0796,-6.6774 10.6508,-8.6067 5.8579,-1.4926 11.9193,-3.9438 13.4698,-5.4468 4.6881,-4.5451 -6.713,-14.1578 -21.0842,-17.7763 -14.8462,-3.7384 -17.9699,-6.8305 -15.3236,-15.1685 1.2348,-3.8909 5.7237,-6.1957 14.3091,-7.3472 26.6502,-3.5747 27.047,-18.0545 0.7397,-27.0059 -19.0018,-6.4656 -20.5251,-6.5487 -18.3971,-1.0027 1.0151,2.6456 -2.1935,9.0607 -7.6284,15.2506 l -9.3805,10.6839 10.997,15.9672 c 6.0481,8.782 10.9967,19.091 10.9967,22.9088 0,20.538 -30.4735,53.8948 -52.3632,57.3176 -10.71,1.6746 -16.0768,5.2052 -29.7995,19.6035 -16.8768,17.7078 -38.6107,31.1594 -47.7441,29.5499 -6.3442,-1.118 -11.7536,15.9566 -6.1778,19.4997 6.3896,4.0597 24.8716,2.6672 32.1366,-2.4211 6.6467,-4.6556 6.7206,-5.133 1.6618,-10.7228 -7.8355,-8.6582 -1.2656,-13.7818 8.0255,-6.2581 5.1242,4.1492 7.3161,9.3346 7.7793,18.4011 0.5803,11.3704 -0.1552,12.8134 -7.4083,14.5328 -4.4289,1.0498 -10.3379,3.8905 -13.1306,6.3125 -4.4836,3.8881 -5.8317,3.6495 -11.5225,-2.0413 -8.3395,-8.3395 -12.217,-5.6677 -11.7009,8.062 0.5246,13.9503 -8.7391,22.232 -24.867,22.232 -9.379,0 -13.7924,2.3508 -24.7681,13.1914 -7.34563,7.2553 -15.20893,15.5653 -17.47423,18.4668 -3.4706,4.4456 -7.1366,4.9523 -23.2995,3.2214 -17.3382,-1.8566 -19.1354,-1.5246 -18.7045,3.4548 0.3704,4.2816 -5.6248,7.7994 -26.911,15.7901 -44.8216,16.8261 -46.9657,17.693 -49.1394,19.8667 -1.1469,1.1469 -4.515,2.0854 -7.4847,2.0854 -7.1972,0 -10.1578,5.3503 -5.8394,10.5533 2.1247,2.5602 2.6959,8.4129 1.4628,14.9865 l -2.0236,10.7858 25.426,-9.2439 c 13.9844,-5.0843 36.3811,-14.1222 49.7705,-20.0842 z m -402.44508,-16.7408 c 13.36,-3.9715 14.4561,-7.5081 3.6058,-11.6333 -13.1013,-4.9812 -19.1939,-3.4253 -31.0381,7.9272 l -11.3667,10.8947 13.6938,-1.8982 c 7.5315,-1.0441 18.8289,-3.4247 25.1052,-5.2904 z m 325.88988,-2.4442 c 1.4101,-1.3058 1.0678,-5.1701 -0.7608,-8.5872 -4.8728,-9.1048 -4.0914,-12.699 2.761,-12.699 3.3811,0 6.0861,-2.0288 6.0861,-4.5646 0,-5.7544 0.3101,-5.7855 -17.2392,1.737 -37.9632,16.2728 -40.0793,18.1838 -26.1244,23.5892 16.6108,6.4343 28.7006,6.6141 35.2773,0.5246 z m 31.451,-8.9877 c 6.7842,-3.2776 21.0777,-8.3024 31.7628,-11.1656 20.3499,-5.4531 29.5001,-10.2998 19.2754,-10.2098 -3.2637,0.031 -16.2043,2.744 -28.7569,6.0338 -12.5527,3.2902 -26.5079,6.0055 -31.0116,6.0341 -9.8254,0.064 -13.4817,4.7585 -8.4375,10.8361 4.4748,5.392 2.4755,5.57 17.1678,-1.5286 z m -428.09208,0.052 c 0,-5.2718 -5.3561,-6.2474 -9.1569,-1.6676 -3.1295,3.7706 -2.6767,4.5311 2.6983,4.5311 3.5522,0 6.4586,-1.2884 6.4586,-2.8635 z m 125.0723,-3.7123 c 5.6894,-1.943 11.4392,-5.3664 12.7776,-7.6076 3.3866,-5.6705 10.0695,-5.0862 19.7519,1.7269 15.8635,11.162 36.2015,10.3808 81.71078,-3.1392 11.0214,-3.2743 15.4158,-2.911 34.9952,2.8921 21.4366,6.3539 48.1471,8.7561 52.2077,4.6958 1.0569,-1.0572 -2.2242,-5.7949 -7.2915,-10.5287 -7.5961,-7.0955 -9.0464,-10.5902 -8.2616,-19.905 1.3277,-15.7612 7.4948,-16.4246 10.0866,-1.0849 2.3879,14.1332 8.8951,18.2249 28.9851,18.2249 12.9419,0 62.8095,-21.6629 79.9331,-34.7237 5.4261,-4.1386 16.6878,-9.1755 25.0258,-11.1927 18.8734,-4.5658 47.1124,-15.3906 47.1124,-18.0594 0,-1.097 3.0811,-3.4003 6.8469,-5.1181 3.7658,-1.7181 13.6938,-8.3672 22.0622,-14.7759 11.0318,-8.4482 18.56243,-11.8248 27.38763,-12.2794 6.6947,-0.3451 13.9765,-0.7626 16.1812,-0.9278 2.5833,-0.1948 3.3251,-2.4558 2.086,-6.3597 -2.9082,-9.163 0.507,-12.4315 9.4402,-9.0349 5.7797,2.1974 8.8383,1.8061 12.2066,-1.5623 2.4719,-2.4722 9.3824,-6.8143 15.3569,-9.6492 5.9744,-2.8349 14.7871,-10.743 19.5842,-17.5731 13.3219,-18.968 13.5316,-19.1275 27.9846,-21.2948 9.5756,-1.436 15.8891,-4.6665 21.5607,-11.0317 4.411,-4.9504 10.0835,-9.001 12.6056,-9.001 6.0408,0 16.6431,-17.655 16.6574,-27.7379 0.03,-10.2974 -10.8107,-23.9942 -18.964,-23.9942 -3.4989,0 -18.8049,7.3785 -34.0136,16.3966 -32.5881,19.3235 -51.9569,29.2043 -85.3022,43.517 -41.91423,17.9906 -105.46863,43.9616 -133.51903,54.5615 -14.764,5.5792 -34.9623,13.7873 -44.8851,18.2405 -17.3519,7.7869 -18.0418,8.5303 -18.0418,19.4394 0,17.4133 -13.9774,25.5011 -57.5896,33.3227 -39.7029,7.1205 -128.84628,2.3481 -176.50178,-4.0146 -73.5459,-9.8196 -118.5681,-31.1246 -165.1746,-47.5534 -2.6654,-0.03 -58.6836,-23.8856 -89.8479,-38.2809 -12.7496,-5.8892 -29.1733,-14.7518 -36.4973,-19.6944 -7.3238,-4.9428 -14.5392,-8.987 -16.0339,-8.987 -1.4948,0 -4.872,-3.0754 -7.5048,-6.8344 l -4.7871,-6.8342 -7.3599,9.1165 c -14.6889,18.1947 -12.8329,28.4651 6.6119,36.5897 8.9205,3.7272 9.8605,5.0969 7.0727,10.3054 -1.768,3.3038 -4.5767,6.849 -6.2413,7.8776 -3.4414,2.1271 -4.0019,13.6877 -1.0386,21.4106 2.4631,6.4185 36.5572,28.7899 43.8758,28.7899 2.9484,0 5.8174,1.027 6.3752,2.2823 1.9817,4.4587 22.5555,12.9668 38.5438,15.9398 8.9253,1.6594 23.9884,7.7398 33.4737,13.5112 21.4663,13.0621 43.056,19.0368 77.3845,21.415 28.7335,1.9904 34.6087,3.3483 42.0709,9.722 6.9729,5.9558 39.9466,21.948 45.6855,22.1577 2.6791,0.097 9.526,-1.412 15.2153,-3.355 z m -81.5574,-4.6458 9.7387,-5.1358 -28.9091,-3.6827 c -15.9,-2.0255 -29.2837,-3.3337 -29.7414,-2.9073 -2.7765,2.5853 3.6231,10.0971 7.3758,8.6572 2.4847,-0.9537 7.5066,-0.2526 11.1595,1.5568 3.6529,1.8097 9.3803,3.8869 12.7276,4.616 3.3474,0.7288 6.4967,1.4841 6.9982,1.6783 0.5015,0.1947 5.2943,-1.9579 10.6507,-4.7825 z m -67.6592,-1.0578 c 9.9509,-5.3253 7.265,-14.1989 -5.5256,-18.2541 -6.2763,-1.9899 -19.6277,-8.1149 -29.6698,-13.6113 -10.0421,-5.4961 -23.2426,-11.354 -29.3349,-13.017 l -11.0767,-3.0239 1.5431,12.5952 c 2.3672,19.3204 13.6463,25.6454 25.1747,14.1168 3.3474,-3.3474 7.9725,-6.0861 10.2782,-6.0861 6.3792,0 10.9648,7.1743 9.1125,14.257 -3.0492,11.6598 16.1818,20.1503 29.4985,13.0234 z m 480.60378,-17.7252 c 7.5316,-1.7623 23.3601,-3.2637 35.1745,-3.3364 27.6276,-0.1704 31.5824,-3.1545 33.8963,-25.5751 2.1305,-20.6399 5.5898,-23.1386 21.87243,-15.7963 25.6308,11.5579 44.7674,-0.4233 34.3078,-21.4794 -4.0568,-8.1664 -6.8777,-10.1803 -14.3441,-10.2406 -8.9664,-0.073 -35.84253,14.489 -42.37863,22.9599 -4.8394,6.2721 -44.3503,25.0183 -57.8776,27.4607 -16.2694,2.9374 -53.183,23.5177 -53.2326,29.6786 -0.03,2.9643 22.5333,1.0192 42.5819,-3.6714 z m -591.11498,-21.6453 c 7.1131,-3.229 12.933,-7.0946 12.933,-8.5909 0,-4.1541 -9.7524,-11.8068 -18.2584,-14.3267 -4.1842,-1.2398 -9.5169,-3.7871 -11.8503,-5.6614 -3.4539,-2.774 -3.8534,-2.1803 -2.1481,3.1922 1.1798,3.7174 0.1552,11.2402 -2.3453,17.2253 -6.6993,16.0339 -0.674,18.3031 21.6691,8.1615 z m 682.40691,-9.537 c 0,-1.4944 -2.0541,-2.7174 -4.5646,-2.7174 -2.51053,0 -4.56463,2.0111 -4.56463,4.469 0,2.7223 1.7841,3.7847 4.56463,2.7175 2.5105,-0.9632 4.5646,-2.9743 4.5646,-4.4691 z m -732.64271,-18.6047 c 12.985,-2.0431 23.609,-4.4395 23.609,-5.3253 0,-0.8856 -4.7764,-5.4212 -10.6139,-10.0793 l -10.6139,-8.4688 -15.3736,6.6135 c -13.2346,5.6936 -21.2168,12.937 -21.2168,19.2534 0,2.5839 8.1292,2.1104 34.2092,-1.9935 z m 489.19758,-0.4926 c 5.0497,-2.2294 23.1215,-57.3332 20.3003,-61.8981 -0.9756,-1.5784 -5.9495,-2.257 -11.053,-1.5081 -8.2564,1.2117 -9.8026,3.162 -14.0273,17.6948 -6.7596,23.2517 -11.3382,24.3378 -10.0017,2.3727 0.9811,-16.1234 0.4997,-17.8796 -4.9017,-17.8796 -4.6173,0 -6.5761,2.9643 -8.5477,12.9331 -4.0524,20.4929 -9.8476,16.5065 -8.4101,-5.7852 0.4604,-7.139 -0.8158,-8.2683 -11.0892,-9.8133 -6.385,-0.9601 -17.661,-2.0875 -25.0575,-2.5056 -12.8387,-0.7258 -13.6071,-0.2891 -16.9465,9.6294 -5.2758,15.6694 -12.10318,16.2731 -9.6371,0.8521 l 1.9564,-12.2359 -19.00058,-3.2855 c -10.4502,-1.8073 -25.1628,-4.0918 -32.6944,-5.0765 -7.5316,-0.985 -32.1804,-5.2097 -54.7751,-9.3884 -22.5948,-4.1788 -52.7211,-9.7074 -66.9474,-12.2858 -34.9499,-6.3347 -94.9719,-23.9845 -116.3673,-34.2186 -16.5147,-7.8992 -17.5667,-8.0441 -19.2775,-2.6545 -2.552,8.0407 -8.614,4.9669 -10.4222,-5.2849 -2.1168,-12.0024 -8.1591,-12.8655 -10.6508,-1.5215 -2.8617,13.0295 -9.1291,9.7183 -9.1291,-4.8233 0,-18.6996 -7.9233,-15.5184 -12.0125,4.8233 -1.8505,9.2052 -4.2649,18.1716 -5.3653,19.9253 -1.1003,1.7535 -1.0638,4.6806 0.082,6.5049 5.0917,8.1122 64.3593,36.0676 119.2394,56.2425 60.122,20.4079 121.1846,43.9164 181.3457,52.9415 24.1912,3.629 145.72608,9.6297 153.39118,6.2452 z m 42.6799,-14.8115 c 13.1798,-6.6653 13.678,-7.4525 18.7784,-29.6699 2.8818,-12.5526 5.2959,-25.1765 5.3644,-28.0528 0.1947,-8.1262 -8.1524,-3.1693 -10.4572,6.2109 -1.1013,4.4815 -4.1136,11.41 -6.6942,15.3964 -5.9199,9.1462 -10.5682,3.404 -7.9284,-9.7947 1.3143,-6.5712 0.7295,-8.5678 -2.2214,-7.5842 -2.2029,0.7342 -7.7081,12.2151 -12.2337,25.5127 -4.5257,13.2979 -9.24,26.5741 -10.4761,29.5031 -3.2655,7.7379 8.9838,7.0173 25.8682,-1.5215 z m 68.755,-50.9713 c 15.6696,-6.6948 29.7356,-12.1723 31.2583,-12.1723 1.5225,0 14.6804,-5.4775 29.2399,-12.1723 14.5598,-6.6947 27.7238,-12.1722 29.2536,-12.1722 2.3319,0 50.79723,-20.747 90.94743,-38.9327 10.9051,-4.9395 72.0524,-39.404 77.5756,-43.7239 16.5661,-12.9577 20.9189,-17.8333 21.5412,-24.1297 0.3987,-4.0308 2.2905,-20.8422 4.2043,-37.359 1.9138,-16.5166 2.6931,-30.8168 1.7318,-31.7781 -0.9613,-0.9613 -9.5859,5.8585 -19.1658,15.1547 -22.5938,21.9253 -39.2336,32.7318 -69.1503,44.9095 -62.76913,33.0925 -117.96907,61.0428 -182.10963,79.1179 l -45.1719,14.5406 -0.6524,30.1194 c -0.3588,16.5658 -1.7458,32.516 -3.082,35.4449 -3.5972,7.8855 1.5583,6.8342 33.5799,-6.8468 z m -72.1337,-20.1454 c 21.4058,-7.4315 25.0727,-13.1686 16.1398,-25.2511 -8.9795,-12.1451 -8.5154,-17.9817 1.6165,-20.3377 22.8771,-5.3189 114.183,-35.4596 135.1409,-44.611 27.19262,-12.0306 36.31811,-18.2018 52.76823,-26.3559 16.7369,-8.3292 44.8091,-21.9025 62.3828,-30.1629 35.0823,-16.49 58.0331,-34.5041 66.6297,-52.2975 l 5.5807,-11.5508 -14.0428,-3.6143 c -7.7236,-1.9877 -17.4666,-4.8129 -21.6508,-6.2781 -4.1842,-1.4649 -22.6708,-5.4955 -41.0814,-8.9567 -78.55682,-10.6805 -161.19698,-35.6788 -236.57293,-50.2336 -8.3745,-1.5712 -11.7027,-1.0432 -12.6254,2.0029 -4.9884,16.4682 -20.1782,97.4992 -19.8852,106.0791 0.3512,10.2849 -4.6406,33.2068 -9.2779,42.6029 -3.2223,6.5298 -10.7071,7.1956 -16.4402,1.4621 -4.036,-4.036 -4.2682,-6.1287 -1.2814,-11.5633 2.0053,-3.6495 4.5627,-13.4826 5.6829,-21.851 1.1201,-8.3684 6.2568,-33.2129 11.4148,-55.21 5.158,-21.9971 10.2926,-46.8869 11.41,-55.3104 l 2.0315,-15.3158 -15.4752,-4.5956 c -25.3374,-7.5246 -54.5164,-9.1051 -73.7757,-3.9964 -18.6503,4.9474 -49.0103,17.1595 -51.51508,20.722 -0.8706,1.2379 -8.3012,5.1306 -16.5126,8.6505 -62.9436,26.9807 -215.1016,111.3956 -227.1302,126.0078 -4.2113,5.116 -6.1029,5.4133 -14.9086,2.3438 -14.1074,-4.9179 -50.4193,-4.3245 -68.3591,1.1174 -16.539,5.0171 -29.067,14.8751 -29.067,22.8722 0,8.831 15.837,23.5278 38.9515,36.1471 57.1061,31.1774 108.8878,45.3051 245.5749,67.0015 112.08118,17.7907 115.23258,18.1318 158.23928,17.1273 28.914,-0.6753 43.9945,-2.4634 56.038,-6.6445 z m -133.6361,-45.534 c 0,-2.6502 1.6262,-4.2761 3.6136,-3.6136 5.6428,1.8809 6.5785,8.4317 1.2048,8.4317 -2.6502,0 -4.8184,-2.1682 -4.8184,-4.8181 z m -191.71298,-8.8757 c 0,-5.1215 0.5575,-5.3275 7.3587,-2.7174 6.7994,2.6091 5.983,7.282 -1.2726,7.282 -3.3811,0 -6.0861,-2.0288 -6.0861,-4.5646 z m -86.8524,-16.9392 c -1.1031,-1.7851 -1.275,-3.9764 -0.3819,-4.8695 2.1798,-2.1798 8.1146,1.6612 8.1146,5.2514 0,3.889 -5.2535,3.6295 -7.7327,-0.3819 z m 116.1826,-4.3622 c -1.1913,-3.1049 0.1644,-4.5646 4.239,-4.5646 3.2963,0 5.9906,2.0531 5.9906,4.5646 0,2.5105 -1.9074,4.5646 -4.239,4.5646 -2.3313,0 -5.0271,-2.0541 -5.9906,-4.5646 z m -144.9666,-24.3445 c 0,-2.5106 2.054,-4.5646 4.5646,-4.5646 2.5105,0 4.5646,2.054 4.5646,4.5646 0,2.5105 -2.0541,4.5646 -4.5646,4.5646 -2.5106,0 -4.5646,-2.0541 -4.5646,-4.5646 z m 96.3638,-6.5934 c -3.5014,-3.5014 -2.216,-7.1004 2.5357,-7.1004 2.5106,0 4.5646,2.054 4.5646,4.5646 0,4.752 -3.599,6.0374 -7.1003,2.5358 z m 227.72238,-13.1866 c -2.4831,-4.018 0.8426,-9.1291 5.9404,-9.1291 4.4508,0 8.4192,7.4491 5.5152,10.3531 -2.8376,2.8379 -9.3772,2.1389 -11.4556,-1.224 z m 257.1081,-12.23 c -3.1377,-5.8625 -2.778,-6.4133 3.5978,-5.5101 3.8961,0.5517 7.0837,2.9433 7.0837,5.3144 0,7.0727 -6.933,7.1996 -10.6815,0.1948 z m -459.13978,-25.4084 c -2.7129,-3.2688 -2.7689,-4.9797 -0.213,-6.5584 4.9629,-3.0674 11.12,3.746 7.0569,7.8091 -2.2005,2.2008 -4.2959,1.8176 -6.8424,-1.2507 z m 86.8801,-10.2667 c -0.8825,-1.4278 -0.4638,-4.4419 0.9305,-6.6978 3.0863,-4.9939 13.3168,-1.7668 11.5186,3.6332 -1.5227,4.5737 -10.197,6.709 -12.4491,3.0646 z m 468.08731,-6.9665 c -1.1819,-1.9122 -0.7169,-4.9087 1.0331,-6.6588 4.0896,-4.0896 13.6244,-0.5225 11.9605,4.4745 -1.6938,5.0871 -10.3047,6.5347 -12.9936,2.1843 z m 39.1481,-22.8576 c -0.9911,-2.5827 -1.0392,-5.4587 -0.1065,-6.3908 2.6648,-2.6651 8.1861,1.8551 8.1861,6.7015 0,5.8393 -5.8049,5.6159 -8.079,-0.3107 z m -427.07901,-25.7349 c 0,-4.5832 1.5891,-6.2264 5.3254,-5.5067 2.9289,0.5638 5.3253,3.0421 5.3253,5.5067 0,2.4649 -2.3964,4.9428 -5.3253,5.507 -3.7363,0.7194 -5.3254,-0.9235 -5.3254,-5.507 z m 44.63168,-26.3733 c -3.858,-3.8577 -2.0051,-7.1004 4.0573,-7.1004 3.3811,0 6.0861,2.0288 6.0861,4.5646 0,4.6328 -6.4373,6.2422 -10.1434,2.5358 z m -389.88638,205.1533 c 0.073,-3.7658 1.1104,-13.7599 2.3054,-22.2092 1.5973,-11.2919 1.0234,-16.935 -2.166,-21.2969 -2.3867,-3.2637 -4.997,-5.2514 -5.8013,-4.4173 -1.6597,1.7221 -3.0592,26.2738 -2.4713,43.3588 0.4227,12.2815 7.9022,16.4794 8.1332,4.5646 z m 564.05818,-371.2994 c 3.4162,-9.2351 0.7094,-17.0415 -7.8547,-22.6529 -6.1774,-4.0475 -9.2664,-4.2317 -19.5137,-1.1615 -22.1124,6.6254 -23.6954,27.9 -2.6136,35.127 12.594,4.3172 26.083,-0.7723 29.982,-11.3126 z"
                          fill="#00b894"
                          transform="translate(-123.02652,10.355116) matrix(0.26458333,0,0,0.26458333,502.47607,-1833.0334)"/>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/?jeu" class="nav-link text-white px-2<?= $activeHome ?>">Accueil</a></li>
                <?php
                if(isset($_SESSION['user'])) {
                    ?>
                    <li><a class="nav-link px-4 text-warning"> Bienvenue <?=  $_SESSION['user']['pseudo']   ; ?></a></li>
                    <?php
                }
                ?>
            </ul>

            <div class="text-end">
                <?php
                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    ?>
                    <a href="/?scoreboard" class="btn btn-outline-light me-2">Tableau des scores</a>
                    <a href="/?logout" class="btn btn-outline-light me-2">Déconnexion</a>
                    <?php
                } else {
                    ?>
                    <a href="/?login" class="btn btn-outline-light me-2<?= $activeLogin; ?>">Connexion</a>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</header>




