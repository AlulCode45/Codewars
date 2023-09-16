'''
The marketing team is spending way too much time typing in hashtags.
Let's help them with our own Hashtag Generator!

Here's the deal:

It must start with a hashtag (#).
All words must have their first letter capitalized.
If the final result is longer than 140 chars it must return false.
If the input or the result is an empty string it must return false.
Examples
" Hello there thanks for trying my Kata"  =>  "#HelloThereThanksForTryingMyKata"
"    Hello     World   "                  =>  "#HelloWorld"
""                                        =>  false
'''

def generate_hashtag(s):
    if(s == "" or s.count('a')+s.count('A')+s.count('b')+s.count('B')+s.count('c')+s.count('C')+s.count('d')+s.count('D')+s.count('e')+s.count('E')+s.count('f')+s.count('F')+s.count('g')+s.count('G')+s.count('h')+s.count('H')+s.count('i')+s.count('I')+s.count('g')+s.count('G')+s.count('k')+s.count('K')+s.count('l')+s.count('L')+s.count('m')+s.count('M')+s.count('n')+s.count('N')+s.count('o')+s.count('O')+s.count('p')+s.count('P')+s.count('q')+s.count('q')+s.count('r')+s.count('R')+s.count('s')+s.count('S')+s.count('t')+s.count('T')+s.count('u')+s.count('U')+s.count('v')+s.count('V')+s.count('w')+s.count('W')+s.count('x')+s.count('X')+s.count('y')+s.count('Y')+s.count('z')+s.count('Z') >= 140):
        return False
    remove_space = "".join(s.title().split())
    return "#"+remove_space
    pass

print(generate_hashtag(" Hello there thanks for trying my Kata" ))
