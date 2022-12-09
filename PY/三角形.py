#輸入值=int(input("請輸入數字"))
#質數=只有1和本身所以除完果為兩個數字

輸入值=int(input("請輸入數字"))
for x in range(1, 輸入值+ 1):
    for j in range(1,x+1):
        print(j,end=(""))
    print()
