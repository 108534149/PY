while True:  
    #try試試看
  try:  
    數值= input().split(' ') #字串分割 
    數值= [int(x) for x in 數值]  #轉數值
    print (數值[0] + 數值[1])  
  except (EOFError):  
    break  