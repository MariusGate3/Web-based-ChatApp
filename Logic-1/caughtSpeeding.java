public int caughtSpeeding(int speed, boolean isBirthday) {
  int ticketDecider = 0; // 0 = no ticket, 1 = small ticket, 2 = big ticket.

  int smallTicketLow = 61;
  int smallTicketHigh = 80;
  int bigTicketLow = 81;

  if(isBirthday){
  smallTicketLow += 5;
  smallTicketHigh += 5;
  bigTicketLow += 5;
}

  if(speed >= smallTicketLow && speed <= smallTicketHigh)
  ticketDecider = 1;

  if(speed >= bigTicketLow)
  ticketDecider = 2;

  return ticketDecider;
}
