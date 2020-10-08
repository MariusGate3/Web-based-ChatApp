public boolean cigarParty(int cigars, boolean isWeekend) {
  if(cigars >= 40 && isWeekend == true)
    return true;
    if(isWeekend == false && cigars >=40 && cigars <= 60)
    return true;
    else
    return false;
}
