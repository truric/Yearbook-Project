<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ATEC logo</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            text-align: center;
        }

        #Group {
            height: 250px;
            position: fixed;

        }
        /*#ball-one, #ball-two, #ball-three, #ball-four, #ball-five, #ball-six, #ball-seven, #ball-eight{ */
        #Ball{
            animation: line 4s ease;
            transform-origin: center;
            transform-box: fill-box;
            /* scale:2; */
            height: 200px;
            width: 10px;
        }

        @keyframes line{
            from{
                transform: rotateZ(0deg);
            }
            to {
                transform: rotateZ(360deg);
            }
        }


        #Title{
            display: flex;
            align-self: center;
            animation: titulo 3s ease-in-out alternate-reverse;
        }

        @keyframes titulo{
            from{
                transform: translateY(0%);
            }
            to {
                transform: translateY(3%);
            }
        }

        .msg{
            color: blue;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        @import url(https://fonts.googleapis.com/css?family=Raleway:100,200,300);

        body, html {
            padding: 0;
            margin: 0;
            height: 100%;
            font-family: 'Raleway';
            overflow: hidden;
            /* display: flex; */
            /* align-content: center; */
            /* justify-content: center; */
        }
        svg{
            display: flex;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;

        }

        .progress-bar {
            position: absolute;
            top: 50%;
            height: 2px;
            background: #17BCF0;
        }

        .done {
            top: 0;
            height: 100%;
            width: 100%;
            transition: all .33s ease;
        }

        .count {
            position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
            font-weight: 100;
            font-size: 0vw;
            margin-top: -1.33em;
            color: #17BCF0;
        }

    </style>
</head>

<body>
    <svg width="1440" height="1024" viewBox="0 250 1440 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="Desktop - 1">
            <rect width="1440" height="1024" fill="white" />
            <g id="ytXnVa01 1" clip-path="url(#clip0)">
                <g id="Group">
                    <g id="Ball">
                        <path id="ball-eight"
                              d="M653.15 507.75C650.25 513.1 641.25 522.5 634.45 527.25C625.9 533.2 625.55 534.25 633.45 530.65C642.8 526.35 656.25 511.25 654.75 506.75C654.5 506 653.85 506.4 653.15 507.75Z"
                              fill="#17BCF0" />
                        <path id="ball-seven"
                              d="M652.8 496.65C645.45 508.55 627.4 525.85 615.95 531.95C608.8 535.75 608.7 536.55 615.6 534.55C630.8 530 651.45 510.7 655.95 496.75C657.95 490.5 656.65 490.45 652.8 496.65Z"
                              fill="#17BCF0" />
                        <path id="ball-six"
                              d="M649.7 485.4C645.1 492.35 615.85 521.45 607.65 527.3C600.05 532.65 602.1 533.25 611.85 528.45C627.6 520.7 643.3 505.25 651.15 489.75C655.55 480.95 654.6 478 649.7 485.4Z"
                              fill="#17BCF0" />
                        <path id="ball-five"
                              d="M636.95 481.75C615.85 501.45 590.7 528 593.2 528C602.3 528 638.65 493.3 647.35 476.3C650.85 469.5 649.15 470.4 636.95 481.75Z"
                              fill="#17BCF0" />
                        <path id="ball-four"
                              d="M636.15 467C619.6 476.1 581.15 517.45 585.3 521.65C586.8 523.15 642 467.85 642 464.85C642 463.7 642.25 463.65 636.15 467Z"
                              fill="#17BCF0" />
                        <path id="ball-three"
                              d="M627.5 460.75C611.4 467.3 589.95 489.1 583.85 505.2C581.1 512.35 582 513.05 585.95 506.85C589.8 500.75 621.1 469.1 628.25 464.05C635.1 459.2 634.8 457.75 627.5 460.75Z"
                              fill="#17BCF0" />
                        <path id="ball-two"
                              d="M612 460.25C597.35 467.8 582.05 486.55 578.6 501.25C577.6 505.6 578.6 504.5 582.45 497.25C588 486.7 606.8 466.9 617.25 460.55C625.25 455.75 621.2 455.5 612 460.25Z"
                              fill="#17BCF0" />
                        <path id="ball-one"
                              d="M601.2 461.05C593 465.15 585.75 473.6 582 483.5C580.5 487.4 581.6 486.5 585.85 480.25C589.65 474.65 597.9 466.3 605 460.8C609.6 457.25 608.65 457.35 601.2 461.05Z"
                              fill="#17BCF0" />
                    </g>
                    <g id="Title">
                        <path id="title-c"
                              d="M848.65 471.05C827.1 477.5 825.55 521.45 846.65 527.75C857.8 531.1 870.35 528.3 875.75 521.3C880.6 514.95 872.45 511.5 866.55 517.4C860.35 523.6 850.2 521.9 846.25 514.05C843.85 509.2 843.8 489.95 846.2 485.5C850.45 477.55 859.95 475.4 866.2 480.9C870.45 484.6 871.95 484.75 874.85 481.7C881.8 474.25 863.2 466.65 848.65 471.05Z"
                              fill="#566569" />
                        <path id="title-e"
                              d="M786.35 472.4C777.65 476.45 772.9 487.55 773.6 502.2C774.5 522.6 782.25 529.45 803.5 528.75C818 528.3 820 527.5 820 521.95C820 517.5 820 517.5 812 519.35C796.7 522.85 787.25 518.55 785.5 507.25L784.85 503.05L802.65 502.75L820.5 502.5L820.8 494.3C821.5 474.5 804.75 463.85 786.35 472.4ZM805.55 480.05C806.9 481.3 808.35 484.35 808.95 487.15C810.75 495.5 811.4 495 798 495H786V490.95C786 479.6 798 472.95 805.55 480.05Z"
                              fill="#566569" />
                        <path id="title-t"
                              d="M746.5 458.65C745.4 458.9 743.5 459.3 742.25 459.55C740.2 460 740 460.6 740 466.5V473L736.75 472.75C733.6 472.5 733.5 472.6 733.2 476.75C732.9 481 732.9 481 736.4 481H739.9L740.2 502.1L740.5 523.2L744 526.15C747.3 528.9 747.95 529.05 755 528.8L762.5 528.5V524.5V520.5L758.7 520.85C752.15 521.4 752 521 752 499.9V481H758.05H764.1L763.8 476.75L763.5 472.5L757.8 472.7L752.1 472.9L751.8 465.7C751.5 458.2 751.1 457.65 746.5 458.65Z"
                              fill="#566569" />
                        <path id="title-a"
                              d="M685.35 471.9C670.4 481.05 670.15 519.25 685 527.15C691.8 530.8 704.45 528.5 708.35 522.9L710 520.55V524.35V528.1L715.75 527.8L721.5 527.5V499.5V471.5H716H710.5L710 475L709.45 478.5L707.65 475.85C703.95 470.35 691.55 468.15 685.35 471.9ZM704.35 480.45C708.35 484.15 709 486.95 709 500.3C708.95 518.3 702.9 525.55 692.55 520C684.1 515.5 683.9 482.05 692.3 478.65C695.85 477.2 701.8 478.1 704.35 480.45Z"
                              fill="#566569" />
                        <path id="Vector"
                              d="M712 545C712 546.45 711.35 547 709.5 547C703.55 547 704.7 557.35 710.75 557.8L715 558.1V550.55C715 544.5 714.7 543 713.5 543C712.65 543 712 543.9 712 545ZM712 552.35C712 556.3 711.15 557.4 709.35 555.85C707.95 554.7 707.5 550.8 708.65 549.65C710.4 547.9 712 549.2 712 552.35Z"
                              fill="#566569" />
                        <path id="Vector_2"
                              d="M772 544.95C772 546.3 771.2 546.95 769.25 547.2C762.65 547.95 764 558 770.75 558H774.55L774.65 550.5C774.75 544.7 774.45 543 773.4 543C772.65 543 772 543.85 772 544.95ZM772 552.5C772 555.35 771.6 556 770 556C768.4 556 768 555.35 768 552.5C768 549.65 768.4 549 770 549C771.6 549 772 549.65 772 552.5Z"
                              fill="#566569" />
                        <path id="Vector_3"
                              d="M793.15 545.25C791.9 548.8 792.95 558 794.6 558C795.6 558 796 556.7 796 553.6C796 551 796.5 548.95 797.25 548.65C798.2 548.3 798.15 547.85 797 547C795.85 546.15 795.8 545.7 796.75 545.35C798.7 544.55 798.2 543 796 543C794.8 543 793.65 543.9 793.15 545.25Z"
                              fill="#566569" />
                        <path id="Vector_4"
                              d="M857.5 544.05C856.8 545.15 856.7 545.1 860 545.45C862.8 545.75 865 545.15 865 544.05C865 542.95 858.15 542.9 857.5 544.05Z"
                              fill="#566569" />
                        <path id="Vector_5"
                              d="M673.4 548.4C671.5 553.4 673.4 557.5 677.75 557.65L682 557.8V552.55V547.35L677.95 547.15C675.35 547.05 673.75 547.5 673.4 548.4ZM679 552.5C679 556.2 676.75 557.45 675.6 554.35C674.7 552.1 675.85 549 677.55 549C678.55 549 679 550.15 679 552.5Z"
                              fill="#566569" />
                        <path id="Vector_6"
                              d="M685.05 548.9C683.55 551.7 683.75 555.55 685.45 556.95C687.2 558.4 692.2 557.95 692.75 556.25C693.05 555.35 692.3 555.2 690.1 555.65C687.1 556.25 687 556.15 687 552.55C687 549.2 687.25 548.9 689.45 549.2C690.8 549.35 692.05 549.05 692.2 548.5C692.8 546.45 686.2 546.8 685.05 548.9Z"
                              fill="#566569" />
                        <path id="Vector_7"
                              d="M694.8 549.55C692.7 554.1 694.75 557.45 699.75 557.7L704 557.9V552.45V547H700C696.65 547 695.75 547.45 694.8 549.55ZM701 552.5C701 555.35 700.6 556 699 556C697.4 556 697 555.35 697 552.5C697 549.65 697.4 549 699 549C700.6 549 701 549.65 701 552.5Z"
                              fill="#566569" />
                        <path id="Vector_8"
                              d="M718.25 548.15C716.65 549.75 716.65 555.25 718.2 556.8C719.65 558.25 726 558.4 726 557C726 556.45 724.65 556 723 556C721 556 720 555.5 720 554.5C720 553.5 721 553 723.05 553C725.8 553 726.1 552.7 725.8 550.25C725.45 547.15 720.6 545.8 718.25 548.15Z"
                              fill="#566569" />
                        <path id="Vector_9"
                              d="M728 552.5C728 556.7 728.35 558 729.5 558C730.6 558 731 556.85 731 553.5C731 550.15 731.4 549 732.5 549C733.6 549 734 550.15 734 553.5C734 556.85 734.4 558 735.5 558C736.6 558 737 556.85 737 553.5C737 550.15 737.4 549 738.5 549C739.6 549 740 550.15 740 553.5C740 556.85 740.4 558 741.5 558C742.6 558 743 556.85 743 553.75C742.95 547.7 742.35 547.25 734.75 547.1L728 547V552.5Z"
                              fill="#566569" />
                        <path id="Vector_10"
                              d="M745 552.5C745 556.7 745.35 558 746.5 558C747.65 558 748 556.7 748 552.5C748 548.3 747.65 547 746.5 547C745.35 547 745 548.3 745 552.5Z"
                              fill="#566569" />
                        <path id="Vector_11"
                              d="M750.6 547.8C747.6 552.7 749.85 558 754.95 558H759V552.5V547H755.05C752.9 547 750.9 547.35 750.6 547.8ZM756 552.5C756 555.35 755.6 556 754 556C752.4 556 752 555.35 752 552.5C752 549.65 752.4 549 754 549C755.6 549 756 549.65 756 552.5Z"
                              fill="#566569" />
                        <path id="Vector_12"
                              d="M778.2 548.2C774.65 551.75 777.5 558 782.7 558C786.9 558 787 556.25 782.85 555.8C778.25 555.35 777.9 553 782.4 553C785.2 553 786 552.6 786 551.2C786 548.8 784.1 547 781.5 547C780.35 547 778.85 547.55 778.2 548.2Z"
                              fill="#566569" />
                        <path id="Vector_13"
                              d="M800.05 548.95C797.5 553.65 799.4 558 804 558C807.45 558 809 556.3 809 552.5C809 547.15 802.4 544.5 800.05 548.95ZM806 552.5C806 555.35 805.6 556 804 556C802.4 556 802 555.35 802 552.5C802 549.65 802.4 549 804 549C805.6 549 806 549.65 806 552.5Z"
                              fill="#566569" />
                        <path id="Vector_14"
                              d="M811 552.65C811 556.95 811.35 558 812.65 558C813.95 558 814.15 557.3 813.7 554.45C813.25 551.65 813.5 550.7 815.05 549.75C817.85 548 817.45 547.1 814 547.2C811.05 547.3 811 547.4 811 552.65Z"
                              fill="#566569" />
                        <path id="Vector_15"
                              d="M818 552.5C818 556.7 818.35 558 819.5 558C820.6 558 821 556.85 821 553.5C821 550.15 821.4 549 822.5 549C823.6 549 824 550.15 824 553.5C824 556.85 824.4 558 825.5 558C826.6 558 827 556.85 827 553.5C827 550.15 827.4 549 828.5 549C829.6 549 830 550.15 830 553.5C830 556.85 830.4 558 831.5 558C832.6 558 833 556.85 833 553.75C832.95 547.7 832.35 547.25 824.75 547.1L818 547V552.5Z"
                              fill="#566569" />
                        <path id="Vector_16"
                              d="M835.6 548.6C833.5 554.1 835.45 558 840.3 557.8L844 557.7V552.5V547.35L840.1 547.2C837.4 547.05 836 547.5 835.6 548.6ZM841 552.55C841 555.45 840.65 556.1 839.25 555.8C836.15 555.2 836.35 549 839.45 549C840.55 549 841 550.05 841 552.55Z"
                              fill="#566569" />
                        <path id="Vector_17"
                              d="M847.05 548.9C845.1 552.55 845.8 555.75 849.15 558.1C852.05 560.15 852.15 560.45 850.4 561.1C848.7 561.8 848.75 561.85 850.8 561.95C852.5 562 853.05 561.55 852.8 560.25C852.6 559.3 853.1 557.95 853.95 557.35C854.8 556.7 855.15 555.8 854.75 555.4C854.3 555 853.45 555.15 852.85 555.75C850.95 557.65 849 555.95 849 552.3C849 549.2 849.25 548.9 851.45 549.2C852.8 549.35 854.05 549.05 854.2 548.5C854.8 546.45 848.2 546.8 847.05 548.9Z"
                              fill="#566569" />
                        <path id="Vector_18"
                              d="M856.75 549.6C854.75 554.05 856.8 557.5 861.55 557.5H865.5L865.8 552.35L866.1 547.25L862 547.2C858.6 547.15 857.7 547.55 856.75 549.6ZM863 552.5C863 555.35 862.6 556 861 556C859.4 556 859 555.35 859 552.5C859 549.65 859.4 549 861 549C862.6 549 863 549.65 863 552.5Z"
                              fill="#566569" />
                        <path id="Vector_19"
                              d="M869.25 548.15C866.2 551.2 868.1 558 872 558C875.7 558 877.2 555.95 876.8 551.3C876.45 547.2 872.05 545.35 869.25 548.15ZM874.85 551.8C875.25 554.95 873.2 557.4 871.35 555.9C869.95 554.7 869.5 550.8 870.7 549.65C872.05 548.25 874.5 549.55 874.85 551.8Z"
                              fill="#566569" />
                    </g>
                </g>
            </g>
        </g>
        <defs>
            <clipPath id="clip0">
                <rect width="300" height="105" fill="white" transform="translate(578 457)" />
            </clipPath>
        </defs>
    </svg>

    <div class="progress-bar"></div>
    <h1 class="count"></h1>

    <script>
        var body = document.querySelector('body'),
            bar = document.querySelector('.progress-bar'),
            counter = document.querySelector('.count'),
            i = 0,
            throttle = 1; // 0-1

        (function draw() {
            if(i <= 100) {
                var r = Math.random();
                if(r < throttle) { // Simulate d/l speed and uneven bitrate
                    i = i + (r*2);
                }

                requestAnimationFrame(draw);
                bar.style.width = i + '%';
                counter.innerHTML = Math.round(i) + '%';


            } else {;
                bar.className += " done";
            }
        })();

        document.addEventListener("DOMContentLoaded", ()=> {

            setTimeout(()=>{
                window.location = window.location.protocol+'//'+window.location.host+'/verifyUserRole';
            }, 2500);

        })


    </script>

</body>
</html>