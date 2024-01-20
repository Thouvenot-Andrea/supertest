<?php header("Content-type: text/css; charset=UTF-8"); ?>


select,input,textarea{
    color :black;
    background-color: darkgrey;
    border: none;
    border-radius:5px;
    font-size: 16px;
    font-family: 'Courier New', Courier, monospace;
    box-shadow: 0px 2px 2px 0px lightskyblue;

}
form div{
    width: 100%;
    display: flex;
    flex-direction: column;
    min-height: 83px;
    margin-top: 25px;
}

#nom::placeholder{
    color: black;
    font-style: italic;
}

#prénom::placeholder{
    color: black;
    font-style: italic;
}

#email::placeholder{
    color: black;
    font-style: italic;
}

form > div > p {
    color :black;
    background-color: darkgrey;
    border: none;
    border-radius:5px;
    font-size: 16px;
    font-family: 'Courier New', Courier, monospace;
    box-shadow: 0px 2px 2px 0px lightskyblue;
}

#message::placeholder{
    color: black;
    font-style: italic;
}



form button {
    max-width: 300px;
    height: 40px;
    font-weight: 700;
    font-size: 20px;
    background: white;
    border: black solid 1px;
    border-radius: 5px;
    box-shadow: 0px 4px 4px 0px black;
    color: black;
}

button:hover { background-color : lightskyblue;}

.contact_main{
    width: 700px;
    background:slategray;
    border:1px solid black;
    border-radius: 8px;
    padding:0 50px 0 50px;
}


