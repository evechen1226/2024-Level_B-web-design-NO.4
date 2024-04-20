<script>
  // 定义一个函数 func，接受一个参数 x，用于将参数 x 打印到控制台
  function func(x) {
    console.log(x);
  }

  // 定义一个函数 func1，接受两个参数 num 和 callback，立即调用回调函数 callback，并将参数 num 传递给它
  // 这个函数是同步执行的，因为回调函数会立即被调用
  function func1(num, callback) {
    callback(num);
  }

  // 定义一个函数 func2，接受两个参数 num 和 callback
  // 这个函数模拟一个异步操作，通过 setTimeout 在指定的延迟时间后调用回调函数 callback，并将参数 num 传递给它
  function func2(num, callback) {
    setTimeout(callback, 1000, num);
  }

  // 调用 func1 函数，传递参数 10 和回调函数 func
  // func1 函数会立即调用回调函数 func，因此 func 函数会同步执行
  func1(10, func);

  // 调用 func2 函数，传递参数 10 和回调函数 func
  // func2 函数模拟一个异步操作，在 1 秒后调用回调函数 func，因此 func 函数会异步执行
  func2(10, func);
</script>