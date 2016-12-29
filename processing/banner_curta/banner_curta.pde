PGraphics c1;



void setup(){
  size(800, 100);
   c1= createGraphics(800,100);
   
   background(#84C9C0);
}

void draw(){

  curta1();
 for(int a=0; a<=800; a+=100){
    image(c1,0+a,0);
  }


  
}