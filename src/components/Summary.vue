<template>
    <div class="book-summary">
        <li class="book-title"><router-link to="/">JavaScript高级程序设计</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter1">JavaScript简介</router-link></li>
        <li class="chapter-level-2"><router-link to="/chapter1">JavaScript简史</router-link></li>
        <li class="chapter-level-2"><router-link to="/chapter1">JavaScript实现</router-link></li>
        <li class="chapter-level-2"><router-link to="/chapter1">JavaScript版本</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter2">在HTML中使用JavaScript</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter3">基本概念</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter4">变量、作用于和内存问题</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter5">引用类型</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter6">面向对象程序设计</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter7">函数表达式</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter8">BOM</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter9">客户端检测</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter10">DOM</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter11">DOM扩展</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter12">DOM2和DOM3</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter13">事件</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter14">表单脚本</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter15">使用Canvas绘图</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter16">HTML5脚本编程</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter17">错误处理与调试</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter18">JavaScript与XML</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter19">E4X</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter20">JSON</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter21">Ajax与Coment</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter22">高级技巧</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter23">离线应用与客服端存储</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter24">最佳实际</router-link></li>
        <li class="chapter-level-1"><router-link to="/chapter25">新兴的API</router-link></li>
    </div>
</template>
<style>
    .book-summary{
        overflow-y: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 300px;
    }
    .book-summary a{
        display: block;
        padding: 10px 15px;
        color: #000;
    }
    .book-summary .router-link-active{
        color: #4183c4;
    }
    .book-title{
        font-size: 16px;
        font-weight: bold;
        border-bottom: 1px solid #ebebeb;
    }
    .chapter-level-2{
        margin-left: 10px;
    }
</style>


