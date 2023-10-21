# writing the data

# file = open("./input.txt", 'w');
# file.writelines(["a\n", "b\n"])
# file.writelines(["a\n", "b\n"])
# file.writelines(["a\n", "b\n"])
# file.writelines(["a\n", "b\n"])
# file.writelines(["a\n", "b\n"])
# file.writelines(["a\n", "b\n"])
# file.close();

# seek default offset is 0
# file = open("./input.txt", 'r');
#
# file.seek(9) # changes the pointer of the disk discriptor
# print(file.tell()) # tells the pointer of the disk discriptor
#
# # print(file.readline(69))
# print(file.read(69))
#
# file.close()

# offsets are 0 => start, 1 => current, 2 => end. Using this with +- position affects where the pointer points to.
# file.seek(-10, 2) => 10th character from the end of the file
# the tell() moves the pointer to the start

# file = open("./bin.dat", 'rb')
# print(file.readline().decode('utf-8'))

# shell utils
import shutil
src = r"./input.txt" # the r treats escape characters as normal characters
dest = r"./input1.txt"
shutil.copy(src, dest)
