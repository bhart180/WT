import java.util.*;
public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int len = sc.nextInt();
        int k = sc.nextInt();
        int x = sc.nextInt();
        int arr[] = new int[len];
        for (int i = 0; i < len; i++)
            arr[i] = sc.nextInt();
        int max = Integer.MIN_VALUE;
        int sum = 0, index = -1;
        for (int i = 0; i < k; i++) {
            max = Integer.MIN_VALUE;
            for (int j = 0; j < len; j++) {
                if (arr[j] == Integer.MIN_VALUE)
                    continue;
                int temp = (int) Math.abs(x - arr[j]);
                if (max < temp) {
                    max = temp;
                    index = j;
                }
            }
            sum = sum + arr[index];
            arr[index] = Integer.MIN_VALUE;
        }
        System.out.println(sum);
        sc.close();
    }
}