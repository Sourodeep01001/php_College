<html>
<?php require_once("head.php");?>
<?php require_once("navbar.php");?>
<body>
    
<style>
        table {
			border-collapse: collapse;
			width: 100%;
			text-align: left;
		}
		th, td {
			padding: 8px;
            color: #240707;
			border: 1px solid #1b0606;
		}
		th {
			background-color: #7b6262;
            /* color: #ccc; */
		}
		input[type=text] {
			padding: 6px;
			border: 1px solid #0c1907;
			border-radius: 4px;
			box-sizing: border-box;
		}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            /* background: linear-gradient(to bottom right, rgb(58, 188, 22) 0%, rgb(185, 55, 55) 50%, rgb(42, 70, 163) 0%, rgb(185, 30, 30) 90%); */
            background-image: url({{url_for('static',filename='a.jpg')}});
            background-size: cover;
            background-position: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .navber_fix {
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .table-1 {
            display: flex;
            /* width: 100%; */
            text-align: center;
            justify-content: center;
            margin: 30px;
            color: aliceblue;
        }
#myTable{
border: 1px solid black;
}
        .mark-pic {
            display: flex;
            justify-content: center;
            margin: 30px 25%;
            background-image: url({{url_for('static',filename='images.jpeg')}});
            background-size: cover;
            background-position: center;
            
        }
        .mark-pic .marksheet {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            height: 30vh;
            width: 70vw;
            /* color: rgb(227, 229, 231); */
            /* background: linear-gradient(to right, rgb(192, 28, 28) 0%, rgb(32, 64, 176) 50%, rgb(34, 198, 26) 50%, rgb(200, 34, 22) 100%); */
        }
.imp{
    width: 100%;
    height: 20vh;
    display: flex;
    justify-content: left;
    /* background-color: aliceblue; */
}
.inputbox{
    position: relative;
    width: 250px;
    margin: 50px 0 30px;
}
 .inputbox input{
    width: 25vw;
    padding: 10px;
    border:1px solid rgba(255, 255, 255, 0.468);
    background:rgb(34, 40, 133);
    border-radius: 5px;
    outline: none;
    color: aliceblue;
    font-size: 1em;
}
.head .navber_fix {
            position: sticky;
            top: 0;
            z-index: 1;
        }
    </style>

    
<?php require_once("footer.php");?>
</body>
    
</html>