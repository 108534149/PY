while True:  
   
  try:  
    數值= input().split(' ')
    數值= [int(x) for x in 數值] 
    are=round((數值[0])*(數值[0]),2)
   # a=round(are)
    print (are)
  except (EOFError): 
    break  