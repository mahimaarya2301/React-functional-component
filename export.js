//1.We can export classes
export class MyClass{
	//1.Property
	
	//2.Constructor
	
	//3.Method
	showName(){
		console.log('Hello from MyClass showName method');
	}
}
//2.We can export class object
class MyClass2{
	
	showName2(){
		console.log("Hello from MyClass2 and showName2 method");
	}
}
export var myclassobj2 = new MyClass2();

//3.We can export functions
function mahima(){
	console.log("Hello");
}
//4.We can export JS object {}
export var students = {
	//1.P:V
	
	//2.Methods
	displayName:function(name){
		console.log(`Hello ${name} from display name`);
	},
	displayName2:function displayName2(){
		console.log('Hello from display name2');
	}
	
};

//5.We can export variable
export var name = "Mahima Arya";

export { mahima };