function selSort(l: number[]) {
  for (let i: number = 0; i < l.length; i++) {
    let smolnum: number = l[i];
    let smolind: number = i;
    for (let j: number = i + 1; j < l.length; j++) {
      if (l[j] < smolnum) {
        smolnum = l[j];
        smolind = j;
      }
    }
    [l[i], l[smolind]] = [l[smolind], l[i]];
  }
  console.log(l);
}

selSort([6, 2, 11, 7, 5]);

function bubSort(l: number[]) {
  while (true) {
    let x: boolean = false;
    for (let i = 1; i < l.length; i++) {
      if (l[i] < l[i - 1]) {
        [l[i], l[i - 1]] = [l[i - 1], l[i]];
        x = true;
      }
    }
    if (x == false) {
      break;
    }
  }
  console.log(l);
}

bubSort([6, 2, 11, 7, 5]);
