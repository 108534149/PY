a=int(input("請輸入身高"))
b=int(input("請輸入體重"))
x= float(a/100)
BMI=round(b/(x*x),2)
if int(BMI)>=20 & int(BMI)<=25:
   print("正常")
else:
   print("不正常")


#註解
#if a > b:
   # print(str(a)+"較大")
#else :
   # if a < b:
     #   print(str(b)+"較大")
    #else :
     #   print("一樣大")

