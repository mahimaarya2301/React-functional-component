//Structure of React login file

//1.Import Area

import React from 'react';

import ReactDOM from 'react-dom';

//let x = <h1>Hello</h1>;

//Create a functional component
function A(){
    return <h1>Hello from A function<B/></h1>
}
function B(){
    return <sub>Hello from B function<C/></sub>
}
function C(){
    return <span>Hello from C function<D/></span>
}
function D(){
    return <strong>Hello from D function<E/></strong>
}
function E(){
    return <sub>Hello from E function<F/></sub>
}
function F(){
    return <strong> Hello from F function<G/></strong>
}
function G(){
    return <span> Hello from G function<H/></span>
}
let H =()=>{
    return <sub>Hello from H function<I/></sub>
}
const I = ()=> <span>Hello from I function<J/></span>

const J = ()=> <sub>Hello from J function<K/></sub>

let K = ()=><strong>Hello from K function<L/></strong>

let L =()=>{
    return <sub>Hello from L function<M/></sub>
}
let M = ()=>{
    return <span>Hello from M function<N/></span>
}
const N = ()=> <sub>Hello from N function<O/></sub>

const O = ()=> <strong>Hello from O function<P/></strong>

let P = ()=> <sub>Hello from P function<Q/></sub>

var Q = ()=>{
    return <span>Hello from Q function<R/></span>
}

var R = ()=>{
    return <strong>Hello from R function<S/></strong>
}

let S = ()=> <sub>Hello from S function<T/></sub>

let T = ()=> <span>Hello from T function<U/></span>

let U = ()=> <strong>Hello from U function<V/></strong>

const V = ()=> <h1>Hello from V function<W/></h1>

function W(){
    return <sub>Hello from W function<X/></sub>
}

let X = ()=>{
    return <span>Hello from X function<Y/></span>
}

let Y = ()=>{
    return <sub>Hello from Y function<Z/></sub>
}

let Z = ()=> <strong>Hello from Z function</strong>

//Object.method();
ReactDOM.render(<A/>,document.getElementById('root'));//Actual Arg