# Import OS and time lib
import os
import time

# Define the function to measure CPU temp
def measure_temp():
        temp = os.popen("vcgencmd measure_temp").readline()
        return (temp.replace("temp=",""))

# Call the function and print the result
print(measure_temp())
