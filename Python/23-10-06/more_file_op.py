import os, string

# renaming file
#
# old_file = r"./delete.txt"
# new_file = r"./renamed.txt"
# os.rename(old_file, new_file)

# deleting file
# os.remove("./renamed.txt")

# program that makes a file where all letters of english alphabet are listed by specified number of letter group.
# def fn(n: int):
#     with open("./input.txt", 'w') as f:
#         alphabet = string.ascii_uppercase # this returns the list of 26 uppercacse letters
#         letters = [alphabet[i : i + n] + "\n" for i in range(0, len(alphabet), n)] # list compression method
#         f.writelines(letters)
#
# fn(3)

# making file with initial as uppercase alphabet and .txt entension
# if not os.path.exists("letters"):
#     os.makedirs("letters")
#     for letter in string.ascii_uppercase:
#         with open("./letters/" +letter + ".txt", "w") as f:
#             f.writelines(letter)

import glob
char_list = []
files_list = glob.glob("./letters/*.txt") # regex over a directory
for file in files_list:
    with open(file, 'r') as f:
        char_list.append(f.read())
print(char_list)
