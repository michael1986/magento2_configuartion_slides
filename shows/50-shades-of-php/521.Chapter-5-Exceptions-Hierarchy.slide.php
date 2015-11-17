<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <h2>Exceptions Hierarchy</h2>
        <pre class="real-pre small">
Throwable                                <span class="pre-comment">(Interface)</span>
├── Exception                            <span class="pre-comment">(Predefined)</span>
│   ├── ErrorException                   <span class="pre-comment">(Predefined)</span>
│   ├── LogicException                   <span class="pre-comment">(SPL)</span>
│   │   ├── BadFunctionCallException     <span class="pre-comment">(SPL)</span>
│   │   │   └─ BadMethodCallException    <span class="pre-comment">(SPL)</span>
│   │   ├── DomainException              <span class="pre-comment">(SPL)</span>
│   │   ├── InvalidArgumentException     <span class="pre-comment">(SPL)</span>
│   │   ├── LengthException              <span class="pre-comment">(SPL)</span>
│   │   └── OutOfRangeException          <span class="pre-comment">(SPL)</span>
│   └── RuntimeException                 <span class="pre-comment">(SPL)</span>
│       ├── OutOfBoundsException         <span class="pre-comment">(SPL)</span>
│       ├── RangeException               <span class="pre-comment">(SPL)</span>
│       ├── OverflowException            <span class="pre-comment">(SPL)</span>
│       ├── UnderflowException           <span class="pre-comment">(SPL)</span>
│       └── UnexpectedValueException     <span class="pre-comment">(SPL)</span>
└── Error                                <span class="pre-comment">(Predefined)</span>
    ├── ArithmeticError                  <span class="pre-comment">(Predefined)</span>
    │   └── DivisionByZeroError          <span class="pre-comment">(Predefined)</span>
    ├── AssertionError                   <span class="pre-comment">(Predefined)</span>
    ├── ParseError                       <span class="pre-comment">(Predefined)</span>
    └── TypeError                        <span class="pre-comment">(Predefined)</span>
        </pre>
    </div>
</section>