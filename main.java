/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package platosstacks;

import java.util.Stack;

/**
 *
 * @author JulianCristobalVille
 */
public class PlatosStacks {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Stack<Integer> stack = new Stack<>();

        EspacioPlatos cocina1 = new EspacioPlatos();
        int contador =1;
        
        cocina1.push(stack,contador++);
        cocina1.push(stack,contador++);
        cocina1.push(stack,contador++);
        
        cocina1.imprimir(stack);
        
        System.out.println("Elemento retirado de la pila: " + cocina1.pop(stack));
        System.out.println("Elemento retirado de la pila: " + cocina1.pop(stack));

        System.out.println("Elemento retirado de la pila: " + cocina1.pop(stack));

        System.out.println("Elemento retirado de la pila: " + cocina1.pop(stack));
        
        
        cocina1.push(stack,contador++);
        cocina1.push(stack,contador++);
        cocina1.push(stack,contador++);
        
        cocina1.imprimir(stack);
        
        cocina1.buscar(stack,2);
        cocina1.buscar(stack,7);

        
    }
    
}
