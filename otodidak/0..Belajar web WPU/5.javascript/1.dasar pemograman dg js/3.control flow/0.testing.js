var s = '';

for(var i = 0; i < 6; i++) {
    for(var j = 0; j < i; j++) {
        s += ' ';
    }
    for(var k = 0; k < 6-i; k++){
        s += '*';
    }
    s += '\n';
}
console.log(s);