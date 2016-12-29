
void danca() {

  d1.beginDraw();
    d1.strokeWeight(0);
  d1.fill(0);

    d1.ellipse(410,60,40,40);
    d1.ellipse(410,120,10,85);
    d1.triangle(375,115,410,100,445,115);
     d1.strokeWeight(7);
     d1.line(418,115,440,155);//PERNA
     
     d1.line(375,70,410,100);//braço esq
      d1.line(410,100,445,70);//braço esq
   d1.endDraw();
}