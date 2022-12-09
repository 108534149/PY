while True:  
   
  try:  
    數值= input().split(' ')
    數值= [float(x) for x in 數值] 
    are=round(數值[0]* 數值[0],1)
    print (str(are))
  except (EOFError):  
    break  