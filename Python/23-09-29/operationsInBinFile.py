# serialization of data
# serialization = pickling in python => It means converting structure into bytes before writing the data into file
# when reading it is called unpickling

def fOperation():
    import pickle
    ls = [10, 20, 30]
    file = open("./bin.dat", 'wb') # write binary
    pickle.dump(ls, file)
    file.close()

fOperation()
