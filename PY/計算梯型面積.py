while True:  
   
  try:  
    數值= input().split(' ')
    數值= [int(x) for x in 數值] 
    are=(float(數值[0]) + float(數值[1]))*float(數值[2])/2
    print ("Trapezoid area:"+str(are))
  except (EOFError):  
    break  