//Import Area
//Import something from 'somelibrary';

import React from 'react';
import ReactDOM from 'react-dom';

//Create some changes in Virtual DOM (Memory)

//Class component must have a render method
class Mahima extends React.Component{ //inheritance
    //1.Property

    //2.Constructor

    //3.Method
    render(){
        return <h1>Hello Mahima<Priyanka/></h1>
    }

} 

//1.Class Component can contain other Class Component
class Priyanka extends React.Component{
    //1.Property

    //2.Constructor

    //3.Method
    render(){
        return <span>Hello Priyanka<Aayushi/></span>
    }
}

//2.Class Component can contain other Functional Component
let Aayushi = ()=> <strong>Hello Aayushi<FuncA/><Pooja/></strong>

//3.Functional Component can contain Class Component
class Pooja extends React.Component{
    //1.Property

    //2.Constructor

    //3.Method
    render(){
        return <span>Hello Pooja</span>
    }
}
//4.Functional Component can contain other Functional Component
let FuncA = ()=> <h2>Hello FuncA<FuncB/></h2>
let FuncB = ()=> <span>Hello FuncB</span>
//Object.method();
ReactDOM.render(<Mahima/>,document.getElementById('root'));//Actual arg