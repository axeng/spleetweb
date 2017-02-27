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

</style>