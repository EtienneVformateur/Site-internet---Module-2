function fibonnacci(x){
    if(x < 2){
      return 1;
    }
    else{
      return fibonnacci(x-2) + fibonnacci(x-1);
    }
  }