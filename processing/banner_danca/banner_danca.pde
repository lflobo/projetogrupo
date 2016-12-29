PGraphics da1;
PFont font;


void setup(){
  size(800, 100);
   da1= createGraphics(800,100);
   
   background(#84C9C0);
}

void draw(){

  danca1();
  for(int a=-10; a<=800; a+=150){
    image(da1,0+a,10);
  }
   font = loadFont("letra6.vlw");
textFont(font, 40);
text("Não tempo venha bailar!", 90, 60);
  strokeWeight(8);
fill(#E5E5E5);

  
}