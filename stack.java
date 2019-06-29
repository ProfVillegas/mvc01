package platosstacks;

import java.util.Stack;


public class EspacioPlatos  {

    public void push(Stack<Integer> stack, int j){
            System.out.println("Insertar " + j +  " en la pila.");
        stack.push(j);
    }
    
    public Integer pop(Stack<Integer> stack){
        if(stack.empty()==false){
            System.out.println("Recuperar el elemento de la pila");
            return stack.pop();
        }else {
            System.out.println("Pila vacia");
            return null;
        }
    }
    public void imprimir(Stack<Integer> stack){
        System.out.println(stack);
    }
    public void buscar(Stack<Integer> stack, int valor){
        int index =stack.search(valor);
        if(index==-1){
            System.out.println("El registro no fue localizado");
        } else {
            System.out.println("El registro fue localizado en la posición "+index);
        }
    }
}