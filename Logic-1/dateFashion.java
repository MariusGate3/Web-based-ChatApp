public int dateFashion(int you, int date) {
  int restaurantAccess = 1;

  if(you >= 8 || date >= 8)
    restaurantAccess = 2;

  if(you <= 2 || date <= 2)
    restaurantAccess = 0;

  return restaurantAccess;
}
