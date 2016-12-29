PGraphics c1;
PFont font;

void setup(){
size(800,100);
background(#DBDBDB);
c1= createGraphics(400,400);
}


void draw(){

font = loadFont("letra3.vlw");
textFont(font, 37);
text("Venha visitar o nosso Teatro Viriato", 160, 80);
fill(0);

 cima();

 fill(#E3A60B);
    
    rect(0,12,800,2);
  }

  void cima(){
   
    for(int j=0;j<=100;j+=12){ //cortina dir
    fill(#BC0915);
      ellipse(j,10,15,200);
}

 for(int q=700;q<=800;q+=12){ //cortina esq
    fill(#BC0915);
      ellipse(q,10,15,200);
}

    
   for(int i=0;i<=800;i+=10){
    fill(#BC0915);
      ellipse(i,10,15,30);
  
 
}
  }
 