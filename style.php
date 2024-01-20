<?php header("Content-type: text/css; charset=UTF-8"); ?>
    header{
    font-size: 25PX;
    display: flex;
    justify-content: space-around;
    background-color:greenyellow;
    }
    footer{
    text-align:center;
    background-color:greenyellow;
    }





    .haut-cv{
    border:3px solid black;
    width:auto;
    display: flex;
    flex-direction:row;
    justify-content:space-between;
    background-color: darkgrey;
    }


    @media screen and (max-width:700px){
    header{
    flex-direction:column;


    }


    }

    /*.b-bleu {
    background-color: blue;
    }*/
    img {
    width: 150px;
    height: 150px;
    border-radius: 30px;
    }
    /*.b-red {
    background-color: red;
    width: 200px;
    height: 150px;
    }
    .b-green {
    border:3px solid green;
    width: 290px;
    height: 150px;
    }*/
    .titre {
    font-size: 50px;
    font-family:Arial, Helvetica, sans-serif;
    color:darkgreen;
    padding-top:50px ;

    }
    #mon-id {
    font-size: 20px;
    list-style-type: none;
    text-align: center;
    font-family: fantasy;
    background-color: dimgray;
    margin: 0px;
    height:150px;
    padding: 0px;
    }
    main {
    background-color:gray;
    }


    p {
    text-decoration:underline;
    font-size:30px;
    color:darkred;
    font-family:Verdana, Geneva, Tahoma, sans-serif
    }

    li {
    font-size:20px;

    }

    .aligne {
    text-align:center;
    background-color:aquamarine ;
    }

    .liste {
    list-style-type:square;

    }

    table ,td,tr,tbody{
    border:1px solid black;
    border-collapse: collapse;
    padding:8px;
    }
    th {
    font-size:30px;
    color:darkred;
    text-decoration:underline;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: normal;
    }

    table{
    width:100%;
    }

    .ita {
    font-style:italic;
    }
    .gras {
    font-weight:bolder;
    }
    td{
    font-family:'Times New Roman', Times, serif;
    }



    .manga{
    text-decoration:none;
    color:black;
    font-size:20px;
    }
    .video{
    text-align:center;
    background-color : white;
    }
    .titre-video{
    font-size:25px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }



    .main{
    background-color:cadetblue;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    display:flex;
    justify-content: center;
    color:black;
    }
    .contactez-nous{
    width: 700px;
    border:1px solid black;
    border-radius: 8px;
    padding:0 50px 0 50px;
    background-color:coral;
    }
    .contactz-nous > h1 {
    font-weight: 500;
    }
    .contactez-nous > p {
    font-weight: 300;
    }

    form div {
    width: 100%;
    display:flex;
    flex-direction: column;
    min-height:83px;
    margin-top:25px;
    }
    form div > label {
    margin-bottom: 7px;
    font-weight: 600;
    }
    form div > input, form div > select, form div > textarea {
    background-color:cornsilk;
    border: none;
    border-radius:5px;
    font-size: 16px;
    font-weight: 500;
    font-family: 'Courier New', Courier, monospace;
    box-shadow: 0px 2px 2px 0px;
    }

    form div > input, form div > select {
    height: 50px;
    padding-left: 10px;
    }
    form div > textarea {
    height:195px;
    padding:15px 0px 0px 10px;
    }
    form div >input::placeholder, form div > textarea::placeholder {
    color:grey;
    }
    form div > select:invalid {
    color:grey
    }
    form div > select option {
    background-color:white;
    margin-top: 20px;
    }
    for div:last-child {
    align-items: center;
    margin-top:20px;
    }
    form button {
    width: 450px;
    max-width: 500px;
    height: 60px;
    font-weight: 700;
    font-size: 25px;
    background: white;
    border: black solid 1px;
    border-radius: 5px;
    box-shadow: 0px 4px 4px 0px black;

    }
    .raison_contact{
    font-size : 20px;
    color :black
    }
    .raison{
    text-align:center;
    color:black;
    font-size:22px
    }


<?php
