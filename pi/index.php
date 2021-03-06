<button onclick="createWorker()">Create new thread</button>
<div id="pi" style="word-wrap: break-word">3.
</div>
<script>
  var pi = {};
  var pistr = '';
  var joblen = {};
  
  function createWorker(){
    var worker = new Worker("worker.js");  
    worker.onmessage = function(event){
      worker.postMessage(createJob());
      var p = event.data.split(','), n = parseInt(p[0]);
      pi[n].push(parseFloat(p[1]));
      if(pi[n].length == joblen[n]){
        var block = (pi[n].reduce(function(a,b){return a+b})%1).toString().substr(2,blocksize);
        delete pi[n+''];
        delete joblen[n+''];
        pistr += block;
        document.getElementById('pi').appendChild(document.createTextNode(block));
      }
    }
    worker.postMessage(createJob())
  }
  
  function is_prime(n){
    if((n % 2) == 0){
      return false;
    }
    var r = Math.sqrt(n); //not necessary to floor
    for(var i = 3; i <= r; i+=2){
      if((n % i) == 0){
        return false;
      }
    }
    return true;
  }

  function next_prime(n){
    do {
      n++;
    } while(!is_prime(n));
    return n;
  }
  
  var blocksize = 9;
  var n = 1-blocksize, N = 0, primepos = 0, maxprime = 2, primes = [3];
  
  function getPrime(index){
    while(!primes[index]){
      primes.push(maxprime = next_prime(maxprime))
    }
    return primes[index];
  }
  
  function createJob(){
    primepos++;
    var a = getPrime(primepos);
    
    if(a >= 2 * N){
      if(pi[n+'']){
        joblen[n] = primepos - 1;
      }
      n+=blocksize;
      N = Math.floor ((n + 20) * Math.log(10) / Math.log(2));
      pi[n+''] = [];
      a = 3;
      primepos = 1;
    }
    return a+','+n+','+N
  }

createWorker();
createWorker();

</script>
