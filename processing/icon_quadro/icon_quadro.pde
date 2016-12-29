
PGraphics qa1;
void setup() {
  size(260, 260);
}

void draw() {
 fill(#84C9C0);
ellipse(130,130,260,260);
 qa1= createGraphics(500,550);
 quadro();
 image(qa1,80,20);
}

void quadro(){
qa1.beginDraw();
qa1.fill(0);
qa1.rect(0,30,100,150);

qa1.fill(#817F7F);
qa1.rect(1,31,97,147);

qa1.fill(#C9C3C3);
qa1.rect(4,34,90,141);

qa1.fill(#817F7F);
qa1.noStroke();
qa1.triangle(50,175,70,130,94,175);
qa1.ellipse(70,130,20,40);

qa1.fill(#4B4949);
qa1.ellipse(70,140,5,20);//boca
qa1.ellipse(65,125,5,15);//olho e
qa1.ellipse(75,125,5,15);
//bolas
qa1.fill(#4B4949);
qa1.ellipse(25,60,30,30);

qa1.fill(#5D5B5B);
qa1.ellipse(25,60,25,25);

qa1.fill(#838282);
qa1.ellipse(25,60,20,20);

qa1.fill(#A0A0A0);
qa1.ellipse(25,60,15,15);

qa1.fill(#B4B4B4);
qa1.ellipse(25,60,10,10);


qa1.endDraw();
}