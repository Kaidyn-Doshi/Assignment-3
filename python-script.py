def calculate(size, toppings):

    price = 0
    if size == "L":
        price = 6.00
    elif size == "XL":
        price = 10.00
    if toppings == 1:
        price += 1.00
    elif toppings == 2:
        price += 1.75
    elif toppings == 3:
        price += 2.50
    elif toppings == 4:
        price += 3.35
    
    tax_rate = 0.13
    subtotal = round(price, 2)
    tax = round(subtotal * tax_rate, 2)
    total = round(subtotal + tax, 2)
    
    print("Subtotal: $" + str(subtotal))
    print("Tax: $" + str(tax))
    print("Total: $" + str(total))
    
# Test Cases
valid_sizes = ["L", "XL"]
valid_toppings = [1, 2, 3, 4]

size = input("Enter pizza size (L or XL): ")
while size not in valid_sizes:
    size = input("Invalid size. Enter pizza size (L or XL): ")

toppings = input("Enter number of toppings (1-4): ")
while toppings not in [str(i) for i in valid_toppings]:
    toppings = input("Invalid number of toppings. Enter number of toppings (1-4): ")

calculate(size, toppings)
