import * as THREE from 'three';
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls.js";
import { OBJLoader } from 'three/examples/jsm/loaders/OBJLoader.js';
$(function(){

var scene,camera,renderer,light,mat,geo,cube,w,h,cont;
cont = document.querySelector('#render');
w = $(cont).width();
h = $(cont).height();
scene = new THREE.Scene();
camera = new THREE.PerspectiveCamera(100,w/h,0.1,10000);
renderer = new THREE.WebGLRenderer();
renderer.setSize(w,h);
scene.background = new THREE.Color(0xf5f5f5);
cont.appendChild(renderer.domElement);
scene.add(camera);
//load
const loader = new OBJLoader();
var f;

loader.load( 'three/DNA.obj', function ( gltf ) {

	scene.add(gltf);
	gltf.name = "g";
	gltf.children[0].material.color.setHex(0x000000);
	animate();

}, undefined, function ( error ) {

	console.error( error );

} );
setInterval(()=>{console.log("h")},1000);


//loade
camera.position.set(450,450,450);
var axes = new THREE.AxesHelper(360);
scene.add(axes);

light = new THREE.SpotLight(0xfff);
scene.add(light);
var controle = new OrbitControls(camera,renderer.domElement);

function animate(){
	scene.getObjectByName('g').rotation.y+=0.06;
	scene.getObjectByName('g').rotation.x+=0.005;
	light.position.set(camera.position.x,camera.position.y,camera.position.z);
	renderer.render(scene,camera);
	requestAnimationFrame(animate);
}
})