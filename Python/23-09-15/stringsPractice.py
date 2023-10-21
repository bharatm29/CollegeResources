def strFuncs() -> None:
    st = """What is it?
        What is going on?
    Indents are maintained"""

    print(st)
    print(st.find("a"))
    print(st.title())
    print(st.upper())
    print(st.lower())
    print("right".join("left")) # cartitian product
    print(st.partition("\n")) # pivot on only one occurence
    print(st.count("W")) # case sensitive
    print(st.endswith("ed"))
    print(st.startswith("wh")) # similar to Trie
    print(st.islower())
    print(st.split(" "))

    a, b, c = "1 2 3".split(chr(32))
    print(a, b, c)

# strFuncs()

def first() -> None:
    word = input("Enter input for first question\n")

    cnt = digitCnt = specialCnt = 0
    
    for c in word:
        cnt += 1
        if c.isdigit():
            digitCnt += 1
        if not c.isalnum() and not c.isspace() and not c.isidentifier():
            specialCnt += 1

    print("Total charaters: ", cnt)
    print("Total special characters: ", specialCnt)
    print("Total digits: ", digitCnt)
    print("Total words: ", len(word.split(" ")))

def second(s: str) -> str:
    return s.title()

def third(s: str, c: str):
    return s.replace(c, '')

def fourth(s: str) -> int:
    sum: int = 0
    for c in s:
        if c.isdigit():
            sum += int(c)

    return sum

def fifth(s: str) -> str:
    return s.replace(" ", "-")

first()
# print(second(input("Give input for second question\n")))
# print(third(input("Enter input for third question\n"), 'a'))
# print(fourth(input("Enter input for fourth question\n")))
# print(fifth(input("Enter input for fourth question\n")))
