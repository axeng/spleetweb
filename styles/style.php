<style>
@charset "UTF-8";
@import url('https://fonts.googleapis.com/css?family=Vollkorn');
@import url('https://fonts.googleapis.com/css?family=PT+Sans');
@import url('https://fonts.googleapis.com/css?family=Titillium+Web');
/* CSS Document */

body
{
	/*font-family: 'Vollkorn', serif;
	font-family: 'PT Sans', sans-serif;*/
	font-family: 'Titillium Web', sans-serif;
	margin: 0px;

	background: url(images/border-left.png) left repeat-y, url(images/border-right.png) right repeat-y;
	/*background: url(images/border-right) right repeat-y;*/
    background-size: 20%;
}

.button {
	cursor: pointer;
}

.menuTable {
	border-spacing: 10px 5px;
}

.buttonCellMenu {
	background-image: url("images/button.png");
	background-size: 100%;
	background-repeat: no-repeat;

	width: 200px;
	height: 50px;

	text-align: center;

	font-weight: bold;
	color: white;
}

.buttonCellMenu:hover, .buttonCellMenu-selected{
	-webkit-transform: translateY(-6.5px);
	transform: translateY(-6.5px);
}

.download {
	font-style: italic;
}

.newsPost {
	width: 65%;
	border-bottom: 2px solid black;
}

.contentBody {
	width: 65%;
}


</style>